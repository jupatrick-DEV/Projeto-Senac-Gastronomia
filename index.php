<?php

//Meu código PHP vem aqui.

$pg = isset($_GET['pg']);

if ($pg) {

//verdadeiro
    switch ($_GET['pg']) {

        case 'inicio':
            include_once 'paginas/includes/header.php';
            include_once 'paginas/inicio.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'sobre':
            include_once 'paginas/includes/header.php';
            include_once 'paginas/sobre.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'grades':
            include_once 'paginas/includes/header.php';
            include_once 'paginas/grades.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'destaque':
           include_once 'paginas/includes/header.php';
            include_once 'paginas/destaque.php';
            include_once 'paginas/includes/footer.php';
            break;
        
        case 'contato':
           include_once 'paginas/includes/header.php';
            include_once 'paginas/contato.php';
            include_once 'paginas/includes/footer.php';
            break;

        default:
//            página de erro
            echo 'Página não encontrada';
            break;
    }
} else {
    include_once 'paginas/includes/header.php';
    include_once 'paginas/inicio.php';
    include_once 'paginas/includes/footer.php';
}