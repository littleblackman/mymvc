<?php

// Rapporter toutes les erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// récupérer la query string
$queryString = $_SERVER['QUERY_STRING'];

// instancier des constantes ROOT et HOST
define('ROOT', dirname(__FILE__));
const VIEW = ROOT . '/view';

const DB_HOST = 'localhost';
const DB_NAME = 'easy_reunion';
const DB_USER = 'root';
const DB_PWD = 'root';

// creaation des fonctions de bases

function dd($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    exit;
}


// récupérer les vars passées dans la query strings
$vars = [];
$datas = explode('&', $queryString);
if(count($datas) > 0 && $datas[0] != '') {
    foreach ($datas as $data) {
        $data = explode('=', $data);
        if($data > 1) $vars[$data[0]] = $data[1];
    }
}

// si page est déterminée dans la query string, on l'utilise, sinon on utilise la page par défaut
(array_key_exists('page', $vars)) ? $page = $vars['page'] : $page = 'hello';


include('controller/'.$page.'.php');
