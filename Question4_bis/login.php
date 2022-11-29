<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Un petit formulaire (pour commencer)</h1>

    <h4>Merci de renseigner les informations suivantes : </h4>
            <form method="post" action="loginctrl.php">
                <label for="nom">Votre nom :</label>
                <input type="text" name="nom">
                <br></br>
                 <label for="age">Votre Age :</label>
                 <input type="number" name="age">
               <br></br>
              <label for="marit">Votre situation maritale :</label>
                <input type="radio" name="marit" value="marie"/> Marié
                <input type="radio" name="marit" value="veuf"/> Veuf(ve)
                <input type="radio" name="marit" value="celibataire"/> Célibataire
               <br></br>
              <label for="centres">Votre centres d'intérêt :</label>
                <input type="checkbox" name="interets" value="internet">
                <label for="internet">Internet</label>
                <input type="checkbox" name="interets" value="Micro_informatique">
                <label for="micro">Micro-informatique</label>
                <input type="checkbox" name="interets" value="jeux_videos">
                <label for="jeux">Jeux Vidéo</label>
              <br></br>
              <input type="submit" value="Envoyer">
        </form>
        </div>
</body>
</html>