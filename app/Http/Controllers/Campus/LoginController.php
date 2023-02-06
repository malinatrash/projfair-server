<?php

namespace App\Http\Controllers\Campus;

use App\Http\Controllers\Campus\model\CampusStudentData;
use App\Http\Controllers\Campus\model\CampusTeacherData;
use App\Http\Controllers\Campus\model\CampusUserData;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Supervisor;
use Exception;
use Illuminate\Support\Str;

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
            $data = $this->AuthorizeApp($authorizationCode);
            $clientEndpoint = $data['client_endpoint'];
            $accessToken = $data['access_token'];

            $campusUserData = $this->LoadCampusUserData($clientEndpoint, $accessToken);
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


    /**
     * Авторизовать приложение в кампусе 
     * @throws Exception - не удалось авторизовать приложение
     * @return array
     */
    function AuthorizeApp(string $authorizationCode): array
    {
        $APP = [
            'ID' => 'local.6149ff4c7fcf40.88217011',
            'CODE' => 'hpSC3PDk3TGpW1tWTqozH67k2JCD9n6ZY00Zp501baj8sNWvFW',
        ];
        //  формирование параметров запроса
        $url = implode('&', [
            'https://int.istu.edu/oauth/token/?grant_type=authorization_code',
            'code=' . $authorizationCode,
            'client_id=' . $APP['ID'],
            'client_secret=' . $APP['CODE'],
        ]);
        //  выполнение запроса и обработка ответа

        $data = @file_get_contents($url);

        if (explode(' ', $http_response_header[0])[1] !== '200') {
            throw new Exception();
        }

        $campusData = json_decode($data, true);

        if (!isset($campusData['client_endpoint']) || !isset($campusData['access_token'])) {
            throw new Exception();
        }
        return $campusData;
    }

    /**
     * Преобразует ответ кампуса из массива в объект
     * @param array $data
     * @return CampusUserData
     */
    function createCampusUserData(array $data): CampusUserData
    {
        $studentData = null;
        if (isset($data['data_student'])) {
            $data_student = $data['data_student'];
            $grup = $data_student['$grup'];
            $active = $data_student['$active'];
            $speccode = $data_student['$speccode'];
            $specname = $data_student['$specname'];
            $nomz = $data_student['$nomz'];
            $facultyid = $data_student['$facultyid'];
            $faculty = $data_student['$faculty'];
            $kafid = $data_student['$kafid'];
            $kaf = $data_student['$kaf'];
            $age = $data_student['$age'];
            $graduate = $data_student['$graduate'];

            $studentData = new CampusStudentData(
                $grup,
                $active,
                $speccode,
                $specname,
                $nomz,
                $facultyid,
                $faculty,
                $kafid,
                $kaf,
                $age,
                $graduate,
            );
        }

        $teacherData = null;
        if (isset($data['data_teacher'])) {
            $data_teacher = $data['data_teacher'];
            $facultyid = $data_teacher['$facultyid'];
            $faculty = $data_teacher['$faculty'];
            $kafid = $data_teacher['$kafid'];
            $kaf = $data_teacher['$kaf'];
            $depid = $data_teacher['$depid'];
            $dep = $data_teacher['$dep'];
            $deleted = $data_teacher['$deleted'];

            $teacherData = new CampusTeacherData(
                $facultyid,
                $faculty,
                $kafid,
                $kaf,
                $depid,
                $dep,
                $deleted,
            );
        }

        $last_name = $data['$last_name'];
        $name = $data['$name'];
        $second_name = $data['$second_name'];
        $gender = $data['$gender'];
        $photo = $data['$photo'];
        $email = $data['$email'];
        $is_student = $data['$is_student'];
        $is_teacher = $data['$is_teacher'];

        $mira_id = $data['$mira_id'];

        return new CampusUserData(
            $last_name,
            $name,
            $second_name,
            $gender,
            $photo,
            $email,
            $is_student,
            $is_teacher,
            $studentData,
            $teacherData,
            $mira_id,
        );
    }


    /**
     * Загрузить данные пользователя
     * 
     * @param string $clientEndpoint
     * @param string $accessToken
     * @throws Exception - не удалось загрузить данные
     * @return CampusUserData - данные пользователя
     */
    function LoadCampusUserData(string $clientEndpoint, string $accessToken): CampusUserData
    {
        $urlToGetUserData = $clientEndpoint . 'user.info.json?auth=' . $accessToken;
        //  выполнение запроса и обработка ответа
        $data = @file_get_contents($urlToGetUserData);
        if (explode(' ', $http_response_header[0])[1] !== '200') {
            throw new Exception();
        }

        $data = json_decode($data, true);
        //  проверка наличия структуры данных
        if (!isset($data['result']['email'])) {
            throw new Exception();
        }
        return $this->createCampusUserData($data['result']);
    }
}
