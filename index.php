<?php
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/configs/main.php";
require_once __DIR__ . "/vendor/autoload.php";

use core\base\BaseController;

$ctrl = new BaseController();
$ctrl->setController('app\controllers\SiteController');
$controller = $ctrl->controller();

debug($controller);