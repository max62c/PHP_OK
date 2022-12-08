<?php
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "admin1234";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_session['mdp'] = $mdp_saisi;
            header('Location: index.php');
        }else{
            echo "Votre mot de passe ou pseudo est incorrect";
        }
    }else{
        echo"Veuillez compléter tous les champs...";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Espace de connexion admin</title>
</head>
<body>
    <form method="POST" action="" align="center">
        <input type="text" name="pseudo" autocomplete="off">
        <br>
        <input type="password" name="mdp">
        <br></br>
        <input type="submit" name="valider">
    </form>
</body>
</html>