<?php
/**
 * Created by PhpStorm.
 * User: sanny4rich
 * Date: 17.12.18
 * Time: 20:45
 */

namespace App\Storage;


class File implements StorageInterface
{

    /**
     * @param $data
     */
    public function save($data)
    {
        echo 'Сохраняем в файл :'.$data.'<br>';
    }
}