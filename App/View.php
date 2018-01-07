<?php
/**
 * Created by PhpStorm.
 * User: -
 * Date: 07.01.2018
 * Time: 18:52
 */

namespace App;


class View
    implements \Countable
{
    protected $data = [];
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
       return $this->data[$name];
    }
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    /**
     * @param $template
     */
    public function display($template){
        echo $this->render($template);
    }

    /**
     * @param $template
     * @return string
     */
    public function render($template)
    {
        ob_start();
        foreach ($this->data as $prop => $value )
        {
            $$prop = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    public function count()
    {
        return count($this->data);
    }
}