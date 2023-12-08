<?php

namespace Ppaifba\Controllers;

use Ppaifba\Core\Controller;
use Ppaifba\Core\Database;
use Ppaifba\Models\Usuarios;

class HomeController extends Controller{


    public function index()
{
     $this->view("inicial");
}

    public function teste(){
        $usuario = new Usuarios();
        $usuario->inserir();
    }

}

