<?php
declare(strict_types=1);

use Ppaifba\Controllers\HomeController;
use Ppaifba\Controllers\LoginController;
use Ppaifba\Controllers\ErroController;

require __DIR__ . "/vendor/autoload.php";

$url = $_GET["url"] ?? "/";

switch($url){
    case "/":
        $controller = new HomeController;
        $controller -> index();
    break;
    case "login":
        $controller = new LoginController();
        $controller->login();
    break;
    case "cadastro":
        $controller = new LoginController();
        $controller->criarconta();
    break;
    default:
    $controller = new ErroController();
    $controller->erro404();

        


}



