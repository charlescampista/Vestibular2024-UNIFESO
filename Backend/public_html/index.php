<?php

//Abrir Sessão

use core\classes\Database;



//session_start();

//carregar o config
require_once('../config.php');

//carrega todas as classes do projeto
require_once('../vendor/autoload.php');


// carrega o sistema de rotas
require_once('../core/routes.php');




// $db = new Database();
// $inscritos = $db->select("SELECT * FROM inscritos");

// var_dump($inscritos);
