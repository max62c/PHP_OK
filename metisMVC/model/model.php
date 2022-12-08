<?php

function req_register($log)
{
    $db = db_connect();

    $sqlQuery = 'INSERT INTO users (user_pseudo, user_mdp, user_nom, user_prenom, user_age) VALUES(:pseudo, :mdp, :nom, :prenom, :age)';
    $reqRegister = $db -> prepare($sqlQuery);
    $reqRegister -> execute([
        'pseudo' => $log['pseudo'],
        'mdp' => $log['mdp'],
        'nom' => $log['nom'],
        'prenom' => $log['prenom'],
        'age' => $log['age'],
    ]);
}

function req_connect($log)
{
    $db = db_connect();

    $sqlQuery = 'SELECT * FROM users WHERE user_pseudo = :pseudo AND user_mdp = :mdp';
    $reqRegister = $db -> prepare($sqlQuery);
    $reqRegister -> execute($log);
    return $reqRegister -> fetchAll();
}


//db connect

function db_connect()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', 'maxime');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
