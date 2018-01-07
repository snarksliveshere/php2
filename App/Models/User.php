<?php

namespace App\Models;

use App\Model;

/**
 * Class User
 * @package App\Models
 * @property int $age
 */
class User extends Model
    implements HasEmail
{
    const TABLE = 'users';

    public $email;

    public $name;
    /**
     * метод, возвращающий адрес e-mail
     * @deprecated
     * @return string Адрес эл-ой почты
     */
    public function getEmail()
    {
        return $this->email;
    }


}