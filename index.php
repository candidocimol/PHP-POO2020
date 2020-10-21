<?php
include "config.php";

/*Função para realizar o carregamento automático das classes */
spl_autoload_register(function($class){
    include "./classes/".$class.".php";
});

$inicio=new Inicio();
$inicio->index();