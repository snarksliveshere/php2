<?php

namespace App;


// модели не будет объектов, поэтому делаем его абстрактным
// используем для наследовании и статики
abstract class Model
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
    public static function findById($id)
    {
        $db = new Db();
        $res = $db->query(
            'SELECT * FROM '.static::TABLE.' WHERE id = :id',
            static::class, // имя этого класса
            array('id'=>$id)
        );
        if(!empty($res))
        {
            return $res;
        }
        else
        {
            return false;
        }
    }
}