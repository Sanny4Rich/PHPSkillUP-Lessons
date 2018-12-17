<?php

    include 'classes/Task3.php';

    $Worker1 = new Task3('Дима',25,1000);

    $answer = $Worker1->getAge() * $Worker1->getSalary();

    echo 'Ответ :'.$answer;
