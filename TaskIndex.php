<?php

    require 'HomeClasses\Worker.php';
    header('Content-Type: text/plain; charset=utf-8');

    $Worker1 = new Worker();
    $Worker1->name= 'Иван';
    $Worker1->age = 25;
    $Worker1->salary = 1000;

    echo 1;