<?php
/**
 * Created by PhpStorm.
 * User: sanny4rich
 * Date: 17.12.18
 * Time: 20:39
 */

namespace App\Service;


use App\Storage\StorageInterface;

class Saver
{
    /**
     * @var StorageInterface
     */
    private $storage;

    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function doIt()
    {
        $this->storage->save(' Данные для сохранения');
    }

}