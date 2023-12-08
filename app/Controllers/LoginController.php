<?php

namespace Ppaifba\Controllers;

use Ppaifba\Core\Controller;

class LoginController extends Controller{


    public function login()
{
     $this->view('login');
}

    public function criarconta()
    {
        $this->view('criarconta');
    }


}

