<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root', 'maxime');
if(isset($_SESSION['mdp'])){
    header('Location: connexion.php');
}

if(isset($_POST['envoi'])){
    if(!empty($_POST['titre']) AND !empty($_POST['description'])){
        $titre = htmlspecialchars($_POST['titre']);
        $description = nl2br(htmlspecialchars($_POST['description']));

        $insererArticle = $bdd->prepare('INSERT INTO articles(titre, description)VALUES(?, ?)');
        $insererArticle->execute(array($titre, $description));

        echo "L'article a été envoyé";
    }else{
        echo "Veuillez compléter tous les champs...";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Publier un article</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="titre">
        <br>
        <textarea name="description"></textarea>
        <br></br>
        <input type="submit" name="envoi">
    </form>
</body>
</html>