<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root', 'maxime');
if(isset($_SESSION['mdp'])){
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Afficher les membres</title>
    <meta charset="utf-8">
</head>
<body>
    
<!-- Afficher tous les membres -->
<?php
    $recupUsers = $bdd->query('SELECT * FROM membres');
    while($user = $recupUsers->fetch()){
        ?>
        <p><?= $user['pseudo']; ?><a href="bannir.php?id=<?= $user['id']; ?>" style="color:red; text-decoration: none;"> Bannir le membre</a></p>
        <?php
    }
?>
<!-- Fin d'afficher tous les membres -->
</body>
</html>