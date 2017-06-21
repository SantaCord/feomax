<?php
namespace core;


abstract class Object
{
    protected $_className;
    protected $_method;
    protected $_params = [];

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->_params;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->_action;
    }

    /**
     * @param mixed $action
     */
    public function setMethod($action)
    {
        $this->_action = $action;
    }

    /**
     * @return mixed
     */
    public function getClassName()
    {
        return $this->_controller;
    }

    /**
     * @param $controller
     */
    public function setClassName($controller)
    {
        $this->_controller = $controller;
    }

    /**
     * @param $name
     * @return bool|mixed
     */
    public function __get($name)
    {
        return (isset($this->_params[$name])) ? $this->_params[$name] : false;
    }

    /**
     * @param string $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->_params[$name] = $value;
    }

    /**
     * @param $method
     * @param $params
     * @return mixed
     */
    public function __call($method, $params)
    {
        $method = (string) 'get'.ucfirst($method);
        $method = (method_exists($this, $method)) ? $method : NULL;

        return call_user_func_array([$this, $method], $params);
    }
}