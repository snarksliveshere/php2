<?php

namespace App;


class Model
{
    const TABLE = '';
    public static function findAll()
    {
        $db = new Db();
        return $db->query(
        //'SELECT * FROM' . User::$table,
            'SELECT * FROM '.static::TABLE,
            static::class // имя этого класса
        );
    }
}