<?php
/**
 * Created by PhpStorm.
 * User: -
 * Date: 16.01.2018
 * Time: 21:43
 */

namespace App\Exceptions;


class Db
    extends \Exception
{
    public function myMessage()
    {
        echo 'непорядок с базой';
    }
}