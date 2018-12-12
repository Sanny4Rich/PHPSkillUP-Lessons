<?php

use Data\User; //* Пространство имени ,для большого количества классов
use Data\Worker as Work; //* Псевдоним для пространства имени

header('Content-Type: text/plain; charset=utf-8');

    function classLoader($class) {
        $class = substr($class, 5);
        $filename = __DIR__ . '/classes/' . $class . '.php';
        require $filename;
    }

    spl_autoload_register('classLoader');

    $user = new User('Aleksandr', new DateTime('1993-04-19' ));
    echo $user->aboutMe()."\n";

    $user2 = new User('Vika',new DateTime('1993-08-31'));
    echo $user2->aboutMe()."\n";

    $worker1 = new Work( ' Petya', new DateTime('1999-04-04'));
    $worker1->setSalary(5000)->setName('Sergey');
    $worker1->setDepartment(Work::DEPARTMENT_QA);
    echo $worker1->aboutMe()."\n";

    echo Work::whoAmI();