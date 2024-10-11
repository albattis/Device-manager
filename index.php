<?php
/** @lang hu */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require("vendor/autoload.php");

session_start();

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

use app\controller\SiteController;
use app\controller\BasicController;
use app\controller\MonitorController;
use app\controller\ComputerController;
use app\controller\LaptopController;
use app\controller\GyartoController;

/*
$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();
*/


$controllerName = ucfirst((isset($_GET['controller']))?$_GET['controller']:"Basic") . "Controller";
$actionName = "action" . ucfirst( (isset($_GET['action'])?$_GET['action']:"index"));

if($controllerName == 'BasicController'){
    $controller = new BasicController();
}
else if($controllerName == 'MonitorController')
{
    $controller=new MonitorController();
}else if($controllerName== 'ComputerController')
{

    $controller=new ComputerController();

}else if($controllerName=='GyartoController')
{
    $controller=new GyartoController();
}

else if($controllerName== 'LaptopController')
{

    $controller=new LaptopController();

}


else {
    $controller = new SiteController();
}

if(in_array($actionName,['actionView', 'actionInsert','actionNutrions', 'actionDelete'])){
    $content = $controller->$actionName();

}

else if(in_array($actionName,['actionPc','actionMonitor','actionLaptop','actionNyomtatas','actionKeszletupdate','actionModify','actionUpdate'])){
    $content = $controller->$actionName($_GET['id']);

}


else if(in_array($actionName,['actionIndex', "actionCreate"])){
    $content = $controller->$actionName();
}
else
{
    $controller = new SiteController();
    $content = $controller->action404();
}

include("./src/app/view/template/main-template.php");