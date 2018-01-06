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
    use Singleton;
    protected $dbh;

    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=php2','root','');
    }

    public function execute($sql,$placeholders)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($placeholders);
        return $res;
    }

    public function query($sql,$class,$placeholders=null)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($placeholders);
        if(false !== $res)
        {
           return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}