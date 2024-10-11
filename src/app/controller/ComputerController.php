<?php

namespace app\controller;
use app\model\Computer;
use helper\Redirect;

class ComputerController extends CommonController
{
    protected $controllerName = "computer";
    //pc föoldal
    public function actionIndex()
    {
        $this->title = "Pc";
        return $this->render("index");
    }
    //Teljes készlet
    public function actionView()
    {
        $this->title = "Teljes Pc készlet";
        $computers=Computer::findAll();
        return $this->render("view", [

            "computer" => $computers

        ]);
    }
    // uj gép felvétele form
    public function actionInsert()
    {
        $pc=new Computer();
        $this->title="Pc felvétel";

        return $this->render("insert");

    }
    //egy gép megjelenitése
    public function actionPc($id)
    {
        $pc = Computer::findOneById($id);
        $this->title = $pc->getNev();
        return $this->render("pc", [
            "pc" => $pc
        ]);

    }
    //adott gép modositása form
    public function actionModify($id)
    {
        $pc=Computer::findOneById($id);
        $this->title=$pc->getNev();
        return $this->render("modify",[
            "pc"=> $pc
        ]);

    }
    //adott gép modositásának végrehajtása
    public function actionUpdate($id)
    {
     $pc=new Computer();
        $this->title="Pc modositás";

        if(isset($_POST)) {

            $pc->load($_POST);

            if ($pc->modify($id)) {

                Redirect::withMessage(true, "success", "Sikeres mentés");

                $this->actionView();

            }
            else {
                Redirect::withMessage(true, "error", "Sikertelen mentés");
            }
        }

        return $this->render("create",[
            "pc" => $pc
        ]);


    }
    //uj gép felvétele
    public function actionCreate()
    {
        $pc=new Computer();
        $this->title="Számítógép hozzáadása";

        if(isset($_POST)) {

            $pc->load($_POST);
            if ($pc->Insert() ){
                Redirect::withMessage(true, "success", "Sikeres mentés");
            }
            else {
                Redirect::withMessage(true, "error", "Sikertelen mentés");
            }
        }

        return $this->render("create",[
            "pc" => $pc
        ]);


    }
    public function actionNyomtatas($id)
    {
        $pc= Computer::findOneById($id);
        $this->title=$pc->getNev();
        return $this->render("print",[
            "pc"=>$pc
        ]);
    }

}