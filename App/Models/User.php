<?php

namespace App\Models;

use App\Db;

 class User
{
    public static $table = 'users';
    const TABLE = 'users';
    public $email;
    public $name;

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
           //'SELECT * FROM' . User::$table,
           'SELECT * FROM '.self::TABLE,
           self::class // имя этого класса
        );
    }
}