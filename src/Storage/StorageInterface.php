<?php
/**
 * Created by PhpStorm.
 * User: sanny4rich
 * Date: 17.12.18
 * Time: 20:38
 */

namespace App\Storage;


interface StorageInterface
{
    public function save($data);
}