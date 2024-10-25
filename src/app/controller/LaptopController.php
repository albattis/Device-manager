<?php
namespace app\controller;

use app\model\Laptop;
use helper\Redirect;

class LaptopController extends CommonController
{
    protected $controllerName="laptop";

    public function actionIndex()
    {
        $this->title="Laptopok";
        return $this->render("index");
    }


    public function actionView()
    {
        $this->title = "Laptop felvétel";
        $laptop=Laptop::findAll();
        return $this->render("view",[
            "laptop"=>$laptop
        ]);
    }

    public function actionInsert()
    {
        $this->title="Laptop";
        return $this->render("insert");
    }

    public function actionCreate()
    {
        $laptop=new Laptop();
        $this->title="Laptop hozzáadása";

        if(isset($_POST)) {

          $laptop->load($_POST);


            if ($laptop->Insert() ){
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
public function actionLaptop($id)
{
    $this->title="Laptop";
    $laptop=Laptop::findOneById($id);
    return $this->render("laptop",[
        "laptop"=>$laptop
    ]);

}
public function actionNyomtatas($id)
    {
        $laptop= Laptop::findOneById($id);
        $this->title=$laptop->getNev();
        return $this->render("print",[
            "laptop"=>$laptop
        ]);
    }
}
