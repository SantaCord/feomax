<?php
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/configs/main.php";
require_once __DIR__ . "/vendor/autoload.php";

use core\base\BaseController;

$ctrl = new BaseController();
$ctrl->setClassName('app\controllers\SiteController');
$controller = $ctrl->getClassName();

debug($controller);