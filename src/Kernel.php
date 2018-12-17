<?php

namespace App;


use App\Service\Mailer;
use App\Service\Saver;
use App\Storage\Database;
use App\Storage\File;

class Kernel
{
    public function run()
    {
//        $mailer = new Mailer();
//        $mailer->send('Test@test.ua');

        $database = new Database();
        $files = new File();

        $database = new Saver($database);
        $filesSaver = new Saver($files);

        $database->doIt();
        $filesSaver->doIt();
    }
}