<?php
/**
 * Created by PhpStorm.
 * User: -
 * Date: 20.01.2018
 * Time: 13:56
 */

namespace App\Exceptions;


class Error404
    extends \Exception
{
    public function myMessage()
    {
        echo 'такой страницы не найдено';
    }
}