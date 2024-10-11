<?php

namespace app\controller;

use app\model\Monitor;
use helper\Redirect;

class MonitorController extends CommonController
{
    protected $controllerName = "monitor";

    public function actionIndex()
    {
        $this->title = "Monitor";
        return $this->render("index");

    }

    public function actionInsert()
    {
        $this->title = "Monitor felvétele";
        return $this->render("insert");
    }

    public function actionCreate()
    {

        $monitor = new Monitor();
        $this->title = "Monitor hozzáadása";
        if (isset($_POST)) {

            $monitor->load($_POST);
            if ($monitor->Insert()) {
                Redirect::withMessage(true, "success", "Sikeres mentés");

            } else {
                Redirect::withMessage(true, "error", "Sikertelen mentés");

            }

        }
        $this->title = "Monitor felvétele";
        return $this->render("index");
    }

    public function actionView()
    {
        $this->title = "Teljes Pc készlet";
        $monitors = Monitor::findAll();

        return $this->render("view", [

            "monitor" => $monitors

        ]);
    }
public function actionNyomtatas($id)
{
    $monitor= Monitor::findOneById($id);
    $this->title=$monitor->getNev();
    return $this->render("print",[
        "monitor"=>$monitor
    ]);
}
    public function actionMonitor($id)
    {

        $this->title = "Monitor";
        $monitors = Monitor::findOneById($id);


        return $this->render("monitor", [

            "monitor" => $monitors

        ]);

    }

    public function actionModify($id)
    {
        $monitor = Monitor::findOneById($id);
        $this->title = $monitor->getNev();
        return $this->render("modify", [
            "monitor" => $monitor
        ]);

    }


}