<?php

namespace core\base;


use core\Object;

class BaseController extends Object
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
}