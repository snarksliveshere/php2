<?php
/**
 * Created by PhpStorm.
 * User: -
 * Date: 06.01.2018
 * Time: 16:12
 */

namespace App\Models;

use App\Model;

/**
 * Class News
 * @package App\Models
 * @property \App\Models\Author $author
 */
class News extends Model
{
    const TABLE = 'news';
    public $authors_id;
    public $content;
    public $date;

    public function __isset($k)
    {
        switch ($k)
        {
            case 'author' :
                return !empty($this->authors_id);
                break;
            default :
                return false;

        }
    }

    public function __get($k)
    {
        switch ($k)
        {
            case 'author' :
                return Author::findById($this->authors_id);
                break;
            default :
                return null;
        }
    }


}