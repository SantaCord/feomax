<?php
namespace core;


abstract class Object
{
    public function __call($method, $params)
    {
        $method = (string) 'get'.ucfirst($method);
        $method = (method_exists($this, $method)) ? $method : NULL;

        call_user_func_array([$this, $method], $params);
    }
}