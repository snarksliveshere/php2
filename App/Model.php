<?php

namespace App;


// модели не будет объектов, поэтому делаем его абстрактным
// используем для наследовании и статики
abstract class Model
{
    const TABLE = '';
    public $id;
    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
        //'SELECT * FROM' . User::$table,
            'SELECT * FROM '.static::TABLE,
            static::class // имя этого класса

        );
    }
    public static function findById($id)
    {
        $db = Db::instance();
        $res = $db->query(
            'SELECT * FROM '.static::TABLE.' WHERE id = :id',
            static::class, // имя этого класса
            array('id'=>$id)
        )[0];
        if(!empty($res))
        {
            return $res;
        }
        else
        {
            return false;
        }
    }
    public static function delete($id)
    {
        $db = Db::instance();
        $res = $db->query(
            'DELETE FROM '.static::TABLE.' WHERE id = :id',
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
    public function isNew()
    {
        return empty($this->id);
    }
     public function insert()
    {
//        if(!$this->isNew())
//        {
//            return;
//        }
        $columns = [];
        $values = [];
        foreach ($_POST as $k=>$v) {
            if('id'==$k)
            {
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }
        $sql = 'INSERT INTO '.static::TABLE.'('
            .implode(',',$columns).
            ') VALUES ('.implode(',',array_keys($values)).')';
        $db = Db::instance();
        $db->execute($sql,$values);
    }
    public function update($id)
    {
        $values = [];
        $str = '';
        foreach ($_POST as $k=>$v) {
            if('id'==$k)
            {
                continue;
            }
            $values[':'.$k] = $v;
            $str .= $k.'=:'.$k.',';
        }
        $str = substr($str, 0, -1);
        $values[':id'] = $id;
        $sql = 'UPDATE '.static::TABLE.' SET '.$str.' WHERE id= :id';
        $db = Db::instance();
        $res = $db->query($sql,static::class,$values);
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