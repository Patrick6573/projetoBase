<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Navegacao extends Controller{
    public function nav(){
        echo "teste aluno";
    }

    public function any($param,$param2){
        echo "Parametro recuperado" .$param. "" .$param2;
    }
}
