<?php
namespace app\controller;
use app\model\gyarto;

class GyartoController extends CommonController
{
    protected $controllerName="gyarto";

    public function actionView()
    {
        $this->title = "Teljes Pc készlet";
        $gyarto=Gyarto::findAll();
        return $this->render("view", [

            "gyarto" => $gyarto

        ]);
    }

}