<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController{
    //metodos
    public function index(){
        //return "Primer controlador";
        //nombre de la carpeta/nombre del archivo
        $arrayData=array(
            "title"=>"Programacion Computacional IV",
            "description"=>"Primera aplicacion con Laravel",
            "studentName"=>"Cristobal Josue Torres Hernandez"
        );
        return view("Test/index")->with($arrayData);
    }
}