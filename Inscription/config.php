<?php 
     try 
    {
        $bdd = new PDO("mysql:host=LOCALHOST;dbname=test;charset=utf8", "root", "maxime");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
