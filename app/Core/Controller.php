<?php

namespace Ppaifba\Core;

abstract class Controller{

protected function view(string $arquivo,array $dados=[]){
    require PASTA_VIEW."{$arquivo}.view.php";
}

}


