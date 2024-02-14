<?php
// appel des fonctions
require_once(ROOT.'/model/bdd_functions.php');

// Connexion à la base de données
$users = getUsers();

// Traitement des données
$names = [];
foreach($users as $user) {
    $names[] = $user['id'].' '.strtoupper($user['email']);
}

ob_start();
include(VIEW.'/pages/show.php');
$htmlContent = ob_get_clean();
include(VIEW.'/layout/base.php');