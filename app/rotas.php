<?php

use Ppaifba\Core\Router;

Router::add("/","HomeController","index");
Router::add("/login","LoginController","login");
Router::add("/criarconta","LoginController","criarconta");
Router::add("/cadastro","CadastroEvento1Controller","cadastro");
Router::add("/cadastro2","CadastroEvento2Controller","cadastro2");
Router::add("/inscricao","InscricaoController","inscricao");
Router::add("/teste","HomeController","teste");

