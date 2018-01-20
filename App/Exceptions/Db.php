<?php


namespace App\Exceptions;


class Db
    extends \Exception
{
    public function myMessage()
    {
        echo 'непорядок с базой';
    }
}