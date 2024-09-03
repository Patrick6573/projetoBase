<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller{
    public function home(){
        return view('main_layout');
    }
    public function ondeEstamos(){
        return view('ondeEstamos');
    }
    public function produtos(){
        return view('produtos');
    }
}
