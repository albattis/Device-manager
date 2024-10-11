<?php
namespace app\controller;

class BasicController extends CommonController{

protected $controllerName="kezdooldal";


public function actionIndex()
    {
        $this->title = "Gép felvétel";
        
        return $this->render("alap");
    }
}