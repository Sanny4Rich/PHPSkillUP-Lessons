<?php

    include 'classes/Task2.php';

    $Worker1 = new Task2();
    $Worker1->setName('Иван');
    $Worker1->setAge(25);
    $Worker1->setSalary(1000);

    $Worker2 = new Task2();
    $Worker2->setName( 'Вася');
    $Worker2->setAge(26);
    $Worker2->setSalary(2000);

    $SalarySum = $Worker1->getSalary() + $Worker2->getSalary();
    $AgeSum = $Worker1->getAge() + $Worker2->getAge();
    echo 'Суммарная зарплата Васи и Ивана :'.$SalarySum.'<br>';
    echo 'Cуммарный возраст Васи и Ивана:'.$AgeSum;