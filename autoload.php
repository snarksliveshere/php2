<?php
/**
    App\Models\User => ./App/Models/User.php
*/
    function my_app_autoload($class)
    {
        $filename = __DIR__.'/'.str_replace('\\','/',$class).'.php';
        if(file_exists($filename))
        {
            include $filename;
        }
    }

    spl_autoload_register('my_app_autoload');
    spl_autoload_register(function ($class){

        $filename = __DIR__.'/lib/'.str_replace(['\\','App'],['/','lib'],$class).'.php';
        if(file_exists($filename))
        {
            include $filename;
        }

    });
