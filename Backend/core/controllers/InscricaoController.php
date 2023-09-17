<?php

namespace core\controllers;

use core\classes\Database;
use core\models\Inscrito;

class InscricaoController
{
    public function listarInscritos()
    {

        $db = new Database();

        $inscritos = Inscrito::buscarInscritosNoDB();

        
        include($_SERVER['DOCUMENT_ROOT'] . '/Backend/core/views/inscritos/listaInscritos.php');
    }
}
