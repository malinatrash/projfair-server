<?php

namespace App\Http\Controllers\Campus;

use App\Http\Controllers\Campus\model\CampusData;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Supervisor;
use Illuminate\Support\Str;

use function App\Http\Controllers\Campus\utils\AuthorizeApp;
use function App\Http\Controllers\Campus\utils\LoadCampusUserData;

/**
 * Авторизация через кампус
 */
class LoginController extends Controller
{
    /**
     * @OA\Get(
     *     path="/campus_auth",
     *     summary="Авторизация через кампус",
     *     tags={"Auth"},
     *     @OA\Response(
     *         response="200",
     *         description="Пользователь авторизован",
     *
     *     )
     * )
     * )
     */
    public function __invoke()
    {
        // Fake authorize
        if (env('APP_DEVELOPMENT')) {
            setcookie('token', 1, ['httponly' => true]);
            return redirect('/blabla');
        }

        $APP = [
            'ID' => 'local.6149ff4c7fcf40.88217011',
            'CODE' => 'hpSC3PDk3TGpW1tWTqozH67k2JCD9n6ZY00Zp501baj8sNWvFW',
        ];

        //  ЭТАП 1 - авторизация учетной записи в ЛИЧНОМ КАБИНЕТЕ
        //  редирект на страницу авторизации
        //  редирект обратно после успешной авторизации
        if (!isset($_REQUEST['code'])) {
            return json_encode(['url' => 'https://int.istu.edu/oauth/authorize/?client_id=' . $APP['ID']]);
        }

        //  ЭТАП 2 - авторизация приложения
        $data = AuthorizeApp();
        if (!$data) {
            return false;
        }
        //  ЭТАП 3 - запрос данных по учетной записи
        $campusData = LoadCampusUserData($data);
        if (!$campusData) {
            return false;
        }

        $api_token = hash('sha256', Str::random(60));

        if ($campusData->is_student) {
            $this->saveStudent($campusData, $api_token);
        } else {
            $this->saveTeacher($campusData, $api_token);
        }

        setcookie('is_student', $campusData->is_student);
        setcookie('token', $api_token, ['httponly' => true]);
        return redirect('/');
    }

    /**
     * Загрузить данные преподавателя в БД
     * @param CampusData $campusData - данные кампуса
     * @param string $api_token - токен
     * @return void
     */
    private function saveTeacher(CampusData $campusData, string $api_token): void
    {
        $fio = $campusData->last_name . ' ' . $campusData->name . ' ' . $campusData->second_name;
        $email = $campusData->email;
        $position = $campusData->data_teacher->dep;


        $supervisor = Supervisor::where('email', $email)->limit(1)->get();

        if ($supervisor->count() == 0) {
            Supervisor::create([
                'fio' => $fio,
                'email' => $email,
                'position' => $position,
                'about' => '',
                'api_token' => $api_token,
            ]);
        } else {
            Supervisor::where('fio', $fio)->limit(1)->update([
                'fio' => $fio,
                'email' => $email,
                'position' => $position,
                'api_token' => $api_token,
            ]);
        }
    }

    /**
     * Загрузить данные студента в БД
     * @param CampusData $campusData - данные кампуса
     * @param string $api_token - токен
     * @return void
     */
    private function saveStudent(CampusData $campusData, string $api_token): void
    {
        //работа с пользователями
        $numz = $campusData->data_student->nomz;
        $user = Candidate::where('numz', $numz)->limit(1)->get();
        $fio = $campusData->last_name . ' ' . $campusData->name . ' ' . $campusData->second_name;
        $group = $campusData->data_student->grup;
        //высчитываем номер курса из группы
        $course = intval(explode('-', $group)[1]);
        //если сентябрь то на курс выше
        $course = date('m') > 8 ? date('y') - $course + 1 : date('y') - $course;

        if ($user->count() == 0) {
            Candidate::create([
                'fio' => $fio,
                'email' => $campusData->email,
                'numz' => $numz,
                'phone' => '',
                'about' => '',
                'course' => $course,
                'training_group' => $group,
                'api_token' => $api_token,
            ]);
        } else {
            Candidate::where('numz', $numz)->limit(1)->update([
                'fio' => $fio,
                'email' => $campusData->email,
                'course' => $course,
                'training_group' => $group,
                'api_token' => $api_token,
            ]);
        }
    }
}
