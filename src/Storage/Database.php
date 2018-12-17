<?php
/**
 * Created by PhpStorm.
 * User: sanny4rich
 * Date: 17.12.18
 * Time: 20:43
 */

namespace App\Storage;


class Database implements StorageInterface
{


    public function save($data)
    {
        echo 'Сохраняем в помощью базы данных :'.$data.'<br>';
    }
}