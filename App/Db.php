<?php

namespace App;


class Db
{
    use \lib\Singleton;
    protected $dbh;

    protected function __construct()
    {
        try
        {
            $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=php2','root','');
        }
        catch (\PDOException $e)
        {
            throw new \App\Exceptions\Db();
        }


    }

    public function execute($sql,$placeholders=[])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($placeholders);
        return $res;
    }

    public function query($sql,$class,$placeholders=[])
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