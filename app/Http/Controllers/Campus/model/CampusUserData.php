<?php

namespace App\Http\Controllers\Campus\model;

class CampusUserData
{
    /**
     * фамилия
     * @var string
     */
    public string $last_name;

    /**
     * имя
     * @var string
     */
    public string $name;
    /**
     * отчество
     * @var string
     */
    public string $second_name;
    /**
     * гендерный признак { М || Ж || пустая строка || FALSE }
     * @var string
     */
    public string $gender;
    /**
     * ссылка на фотографию { ссылка || пустая строка }
     * @var string
     */
    public string $photo;
    /**
     * верифицированный адрес электронной почты
     * @var string
     */
    public string $email;
    /**
     * признак принадлежности к группе "студенты" { 0 || 1 }
     * @var int
     */
    public int $is_student;
    /**
     * признак принадлежности к группе "преподаватели" { 0 || 1 }
     * @var int
     */
    public int $is_teacher;
    /**
     * массив данных по пользователю группы "студент" { массив || пустой массив || FALSE }
     * @var object
     */
    public CampusStudentData | null $data_student;
    /**
     * массив данных по пользователю группы "преподаватель" { массив || пустой массив || FALSE }
     * @var object
     */
    public CampusTeacherData | null $data_teacher;
    /**
     * массив значений идентификатора пользователя в АИС "УНИВЕРСИТЕТ" { массив || пустой массив || FALSE }
     * @var array
     */
    public array $mira_id;

    public function __construct(string $last_name, string $name, string $second_name, string $gender, string $photo, string $email, int $is_student, int $is_teacher, CampusStudentData | null $data_student, CampusTeacherData | null $data_teacher, array $mira_id)
    {
        $this->$last_name = $last_name;
        $this->$name = $name;
        $this->$second_name = $second_name;
        $this->$gender = $gender;
        $this->$photo = $photo;
        $this->$email = $email;
        $this->$is_student = $is_student;
        $this->$is_teacher = $is_teacher;
        $this->$data_student = $data_student;
        $this->$data_teacher = $data_teacher;
        $this->$mira_id = $mira_id;
    }
}
