<?php
/**
 * Created by PhpStorm.
 * User: -
 * Date: 04.01.2018
 * Time: 13:31
 */

namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=php2','root','');
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if(false !== $res)
        {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];

    }
}