<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Navegacao extends Controller{
    public function any($param){
        echo "Parametro recuperado " .$param;
    }
    public function any2($param,$param2){
        echo "Parametro recuperado " .$param. " " .$param2;
    }
    public function num($param){
        echo "Valor recuperado " . $param;
    }
    public function alpha($param){
        echo "Valor recuperado " . $param;
    }
    public function alphanum($param){
        echo "Valor recuperado " . $param;
    }
}
