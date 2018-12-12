<?php

namespace Data;

class Worker extends User
{

    const DEPARTMENT_DEVS = 1;
    const DEPRTMENT_SELS = 2;
    const DEPARTMENT_QA = 3;
    /**
     * @var int
     */
    private $salary;


    /**
     * @var int
     */
    private $department;
    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function aboutMe()
    {
        return parent::aboutMe() .' Я получаю : '.$this->salary;
    }

    /**
     * @return int
     */
    public function getDepartment(): int
    {
        return $this->department;
    }

    /**
     * @param int $department
     */
    public function setDepartment(int $department): void
    {
        $this->department = $department;
    }




    public static function whoAmI(){
        return 'Я работник';
    }
}