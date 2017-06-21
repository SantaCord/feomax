<?php

namespace core\base;


class BaseController
{
    private $_controller = 'app\controllers\MainController';
    private $_action = '';

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->_action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->_action = $action;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->_controller;
    }

    /**
     * @param $controller
     */
    public function setController($controller)
    {
        $this->_controller = $controller;
    }

    public function __call($method, $params)
    {
        $method = (string) 'get'.ucfirst($method);
        $method = (method_exists($this, $method)) ? $method : NULL;

        call_user_func_array([$this, $method], $params);
    }
}