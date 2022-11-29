<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nom = $_GET["nom"];
    $age = $_GET["age"];
    $internet = $_GET["internet"];
    $marit = $_GET["marit"];
    $marequ = 'insert into Matable values(' ;
    $marequ = $_GET["nom"];$_GET["age"];
    echo "<b>Merci à vous $nom</b><br />";
    echo "<b>Vous avez donc le bel âge de $age ans ","<b>vous êtes $marit</b><br />","<b>et vous vous interessez à </b><br />";
    for ($i=0; $i<count($internet); $i++) {
        echo $internet[$i]."<br />";
    }
    echo "<br><br />";
    echo "<b>Je m'empresse d'envoyer la requête :  <b>$marit</b><br />";
    
    ?>
</body>
</html>