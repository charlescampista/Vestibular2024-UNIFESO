<?php

namespace core\models;

use core\classes\Database;

class Inscrito
{
    public static function criarInscritoNoDB($nome, $telefone, $curso, $mensagem)
    {

        $bd = new Database();
        // parametros
        $parametros = [
            ':id' => 0,
            ':nome' => $nome,
            ':telefone' => $telefone,
            ':curso' => $curso,
            ':mensagem' => $mensagem,
            ':data' => NULL,
        ];

        $bd->insert("INSERT INTO inscritos VALUES(
                :id,
                :nome,
                :telefone,
                :curso,
                :mensagem,
                :data
            )", $parametros);
    }


    public static function buscarInscritosNoDB()
    {

        $bd = new Database();
        // parametros


        $inscritos = $bd->select("SELECT * FROM inscritos");
        return $inscritos;
    }
}
