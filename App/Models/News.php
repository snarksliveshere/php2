<?php
/**
 * Created by PhpStorm.
 * User: -
 * Date: 06.01.2018
 * Time: 16:12
 */

namespace App\Models;

use App\Model;
use App\MultiException;

/**
 * Class News
 * @package App\Models
 * @property \App\Models\Author $author
 */
class News extends Model
{
    const TABLE = 'news';
    public $author_id;
    public $content;
    public $id;
    public function __isset($k)
    {
        switch ($k)
        {
            case 'author' :
                return !empty($this->author_id);
                break;
            case 'authors' :
                return !empty($this->author_id);
                break;
            default :
                return false;

        }
    }

    /**
     * Lazy Load
     * @param $k
     * @return bool|null
     */
    public function __get($k)
    {
        switch ($k)
        {
            case 'author' :
                return Author::findById($this->author_id);
                break;
            case 'authors' :
                return Author::findAll();
                break;
            default :
                return null;
        }
    }
    public function fill($data = [])
    {
        $e = new MultiException();
        if(true)
        {
            $e[] = new \Exception('неверный заголовок');
        }
        if(true)
        {
            $e[] = new \Exception('неверный текст');
        }
        throw $e;
    }


}