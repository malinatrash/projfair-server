<?php

namespace App\Http\Controllers\Campus\model;


class CampusTeacherData
{
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
     * идентификационный номер подразделения - места работы
     * @var string
     */
    public string $depid;
    /**
     * наименование подразделения - места работы
     * @var string
     */
    public string $dep;
    /**
     *  признак увольнения преподавателя { 0 || 1 }
     * @var int
     */
    public int $deleted;
    public function __construct(string $facultyid, int $faculty, int $kafid, string $kaf, string $depid, string $dep, int $deleted)
    {
        $this->$facultyid = $facultyid;
        $this->$faculty = $faculty;
        $this->$kafid = $kafid;
        $this->$kaf = $kaf;
        $this->$depid = $depid;
        $this->$dep = $dep;
        $this->$deleted = $deleted;
        
    }
}
