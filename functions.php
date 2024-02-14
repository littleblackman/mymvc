<?php
// Rapporter toutes les erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// instancier des constantes ROOT et HOST
define('ROOT', dirname(__FILE__));
const VIEW = ROOT . '/view';
const APPLICATION = ROOT . '/application';
const CONTROLLER = ROOT . '/controller';



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