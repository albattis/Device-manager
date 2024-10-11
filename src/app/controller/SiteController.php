<?php


namespace app\controller;


class SiteController extends CommonController
{
    protected $controllerName = "site";

    public function action404()
    {
        $this->title = "404";
        header("HTTP/1.0 404 Not Found");
        return $this->render("404");
    }
}