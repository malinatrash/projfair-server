<?php

namespace App\Http\Controllers\Campus\model;

class CampusStudentData{
    /**
    * шифр группы
    * @var string
    */
    public string $grup; 
    /**
    * Признак действительности студента { 0 || 1 }
    * @var int
    */
    public int $active; 
    /**
    * код специальности
    * @var string
    */
    public string $speccode; 
    /**
    * наименование специальности
    * @var string
    */
    public string $specname; 
    /**
    * номер зачетной книжки
    * @var string
    */
    public string $nomz; 
    /**
    * идентификационный номер факультета (института)
    * @var string
    */
    public string $facultyid; 
    /**
    * наименование факультета (института)
    * @var string
    */
    public string $faculty; 
    /**
    * идентификационный номер кафедры
    * @var string
    */
    public string $kafid; 
    /**
    * наименование кафедры
    * @var string
    */
    public string $kaf; 
    /**
    * возраст
    * @var string
    */
    public string $age; 
    /**
    * признак выпускника { 0 || 1 }
    * @var string
    */
    public int $graduate; 

    public function __construct(string $grup, string $active, string $speccode, string $specname, string $nomz, string $facultyid, int $faculty, int $kafid, string $kaf, string $age, int $graduate)
    {
        $this->$grup = $grup;
        $this->$active = $active;
        $this->$speccode = $speccode;
        $this->$specname = $specname;
        $this->$nomz = $nomz;
        $this->$facultyid = $facultyid;
        $this->$faculty = $faculty;
        $this->$kafid = $kafid;
        $this->$kaf = $kaf;
        $this->$age = $age;
        $this->$graduate = $graduate;
    }
}