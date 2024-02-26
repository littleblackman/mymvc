<?php
// Rapporter toutes les erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// instancier des constantes ROOT et HOST
define('ROOT', dirname(__FILE__));
const VIEW = ROOT . '/view';
const APPLICATION = ROOT . '/application';
const CONTROLLER = ROOT . '/controller';

const MODEL = ROOT . '/model';



const DB_HOST = 'localhost';
const DB_NAME = 'easy_reunion';
const DB_USER = 'root';
const DB_PWD = 'root';

// creaation des fonctions de bases

// autoloader

spl_autoload_register(function ($className) {

     $class = $className . '.php';

    // Vérifier si le fichier existe et l'inclure
    if (file_exists($file = APPLICATION . '/' . $class)) {
        require $file;
    } else if (file_exists($file = CONTROLLER . '/' . $class)) {
        require $file;
    } else if(file_exists($file = MODEL.'/'.$class)) {
        require $file;
    } else {
        echo "la class ".$className." n'existe pas"; exit;
    }
});


function dd($var, $continue = false)
{
    echo '<pre>'; print_r($var); echo '</pre>';
    if(!$continue) exit;

}