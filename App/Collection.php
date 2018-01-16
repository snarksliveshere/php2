<?php
namespace App;

class Collection
    implements \ArrayAccess
{
    protected $data;
    public function offsetExists($offset)
    {
        return array_key_exists($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->data[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if('' == $offset)
        {
            $this->data[] = $value;
        }
        else
        {
            $this->data[$offset] = $value;
        }

    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }


}