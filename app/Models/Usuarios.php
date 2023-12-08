<?php

namespace Ppaifba\Models;

use Ppaifba\Core\Database;

Class Usuarios{

    public function inserir(){

        $db = new Database();
        $sql = "INSERT INTO usuarios(nome,email,login,senha,Endereco_idEndereco) VALUES (?,?,?,?,?)";

        $valores = ["maria","Maria@ifba.edu.br","Maria","123",1];

        var_dump($db->execute($sql,$valores));


        }



    }


