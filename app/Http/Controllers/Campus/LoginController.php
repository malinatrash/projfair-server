<?php

namespace App\Http\Controllers\Campus;

use App\Http\Controllers\Campus\model\CampusUserData;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Supervisor;
use Exception;
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

        $authorizationCode = $_REQUEST['code'];
        //  редирект на страницу авторизации.  редирект обратно после успешной авторизации
        if (!isset($authorizationCode)) {
            $CAMPUS_LOGIN_URL = 'https://int.istu.edu/oauth/authorize/?client_id=local.6149ff4c7fcf40.88217011';
            return json_encode(['url' =>  $CAMPUS_LOGIN_URL]);
        }

        try {
            $data = AuthorizeApp($authorizationCode);
            $clientEndpoint = $data['client_endpoint'];
            $accessToken = $data['access_token'];

            $campusUserData = LoadCampusUserData($clientEndpoint, $accessToken);
            $this->saveUserData($campusUserData);
        } catch (Exception $e) {
            return false;
        }
        return redirect('/');
    }

    /**
     * Сохранить данные пользователя с кампуса
     * @param CampusUserData $campusUserData
     * @return void
     */
    private function saveUserData(CampusUserData $campusUserData): void
    {
        $api_token = hash('sha256', Str::random(60));

        if ($campusUserData->is_student) {
            $this->saveStudent($campusUserData, $api_token);
        }
        if ($campusUserData->is_teacher) {
            $this->saveTeacher($campusUserData, $api_token);
        }

        setcookie('is_student', $campusUserData->is_student);
        setcookie('is_teacher', $campusUserData->is_teacher);
        setcookie('token', $api_token, ['httponly' => true]);
    }

    /**
     * Загрузить данные преподавателя в БД
     * @param CampusUserData $campusData - данные кампуса о пользователе
     * @param string $api_token - токен
     * @return void
     */
    private function saveTeacher(CampusUserData $campusUserData, string $api_token): void
    {
        $fio = $campusUserData->last_name . ' ' . $campusUserData->name . ' ' . $campusUserData->second_name;
        $email = $campusUserData->email;
        $position = $campusUserData->data_teacher->dep;


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
     * @param CampusUserData $campusUserData - данные кампуса о пользователе
     * @param string $api_token - токен
     * @return void
     */
    private function saveStudent(CampusUserData $campusUserData, string $api_token): void
    {
        //работа с пользователями
        $numz = $campusUserData->data_student->nomz;
        $user = Candidate::where('numz', $numz)->limit(1)->get();
        $fio = $campusUserData->last_name . ' ' . $campusUserData->name . ' ' . $campusUserData->second_name;
        $group = $campusUserData->data_student->grup;
        //высчитываем номер курса из группы
        $course = intval(explode('-', $group)[1]);
        //если сентябрь то на курс выше
        $course = date('m') > 8 ? date('y') - $course + 1 : date('y') - $course;

        if ($user->count() == 0) {
            Candidate::create([
                'fio' => $fio,
                'email' => $campusUserData->email,
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
                'email' => $campusUserData->email,
                'course' => $course,
                'training_group' => $group,
                'api_token' => $api_token,
            ]);
        }
    }
}
