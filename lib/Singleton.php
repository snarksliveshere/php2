<?php

namespace lib;

trait Singleton
{
    protected static $instance;

    public static function instance()
    {
        if(null === static::$instance)
        {
            static::$instance = new static;
        }
        return static::$instance;

    }
}
/*
class Singleton
{
    protected static $instance;
    protected function __construct()
    {
    }
    public static function instance()
    {
        if(null === self::$instance)
        {
            self::$instance = new self;
        }
        return self::$instance;

    }
}
*/

/***
abstract class Singleton
 * но унаследоваться можно только от одного класса, так что тут проблема
{
protected static $instance;
protected function __construct()
{
}
public static function instance()
{
if(null === static::$instance)
{
static::$instance = new static;
}
return static::$instance;

}
}
 */