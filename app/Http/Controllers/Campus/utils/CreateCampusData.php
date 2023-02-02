<?php

namespace App\Http\Controllers\Campus\utils;

use App\Http\Controllers\Campus\model\CampusData;
use App\Http\Controllers\Campus\model\CampusStudentData;
use App\Http\Controllers\Campus\model\CampusTeacherData;

function createCampusData(array $data): CampusData
{
    $grup = $data['data_student']['$grup'];
    $active = $data['data_student']['$active'];
    $speccode = $data['data_student']['$speccode'];
    $specname = $data['data_student']['$specname'];
    $nomz = $data['data_student']['$nomz'];
    $facultyid = $data['data_student']['$facultyid'];
    $faculty = $data['data_student']['$faculty'];
    $kafid = $data['data_student']['$kafid'];
    $kaf = $data['data_student']['$kaf'];
    $age = $data['data_student']['$age'];
    $graduate = $data['data_student']['$graduate'];

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

    $facultyid = $data['data_teacher']['$facultyid'];
    $faculty = $data['data_teacher']['$faculty'];
    $kafid = $data['data_teacher']['$kafid'];
    $kaf = $data['data_teacher']['$kaf'];
    $depid = $data['data_teacher']['$depid'];
    $dep = $data['data_teacher']['$dep'];
    $deleted = $data['data_teacher']['$deleted'];

    $teacherData = new CampusTeacherData(
        $facultyid,
        $faculty,
        $kafid,
        $kaf,
        $depid,
        $dep,
        $deleted,
    );

    $last_name = $data['$last_name'];
    $name = $data['$name'];
    $second_name = $data['$second_name'];
    $gender = $data['$gender'];
    $photo = $data['$photo'];
    $email = $data['$email'];
    $is_student = $data['$is_student'];
    $is_teacher = $data['$is_teacher'];

    $mira_id = $data['$mira_id'];

    return new CampusData(
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
