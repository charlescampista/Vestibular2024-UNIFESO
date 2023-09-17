<?php

namespace core\controllers;

use core\models\Inscrito;

class ConfirmacaoController
{
    public function index()
    {

        if (!$_SERVER["REQUEST_METHOD"] === "POST") return;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $curso = $_POST["curso"];
            $mensagem = $_POST["mensagem"];

            Inscrito::criarInscritoNoDB($nome, $telefone, $curso, $mensagem);
            //echo $_SERVER['DOCUMENT_ROOT'];
            include($_SERVER['DOCUMENT_ROOT'] . "/Backend/core/views/confirmation/confirmacaoView.php");
        }
    }
}
