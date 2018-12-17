<?php

    include 'classes/Task1.php';

    $Worker1 = new Task1();
    $Worker1->name = (' Вася ');
    $Worker1->age = 25;
    $Worker1->salary = 1000;

    $Worker2 = new Task1();
    $Worker2->name = ('Петя');
    $Worker2->age = 26;
    $Worker2->salary = 2000;

    $SalarySum = $Worker1->salary + $Worker2->salary;
    $AgeSum = $Worker1->age + $Worker2->age;
    echo 'Суммарная зарпалат :'.$SalarySum.'<br>';
    echo 'Суммарный возраст :'.$AgeSum;