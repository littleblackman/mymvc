<?php

function connexion()
{

    try {
        $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }

    return $conn;
}

function getUsers()
{
    $conn = connexion();
    $sql = "SELECT * FROM users limit 10";
    $result = $conn->query($sql);
    $users = $result->fetchAll(PDO::FETCH_ASSOC);
    return $users;

}
