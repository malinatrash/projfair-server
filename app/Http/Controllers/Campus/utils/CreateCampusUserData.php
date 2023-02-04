<?php

namespace App\Http\Controllers\Campus\utils;

use App\Http\Controllers\Campus\model\CampusUserData;
use App\Http\Controllers\Campus\model\CampusStudentData;
use App\Http\Controllers\Campus\model\CampusTeacherData;

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
