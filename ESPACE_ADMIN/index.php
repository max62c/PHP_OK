<?php
session_start();
if(isset($_SESSION['mdp'])){
    header('Location: connexion.php');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
    <a href="membres.php">
        <button style="color:white; background-color: green; border-radius: 11px; padding: 20px 45px; display: inline-block; text-align: center;">Afficher tous les membres</button>
    </a>
    <a href="publier-article.php">
        <button style="color:white; background-color: green; border-radius: 11px; padding: 20px 45px; display: inline-block; text-align: center;">Publier un nouvel article</button>
    </a>
    <a href="articles.php">
        <button style="color:white; background-color: green; border-radius: 11px; padding: 20px 45px; display: inline-block; text-align: center;">Afficher tous les articles</button>
    </a>
    <footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </footer>
</body>
</html>
