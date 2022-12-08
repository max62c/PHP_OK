<?php session_start(); ?>

<?php 
    $title = 'inscription';
    $page = 4;    
?>

<?php ob_start(); ?>

<h2>vous inscrire :</h2>

<section class="sub">

    <form action="../controler/cont-register.php" method="POST" class="formul">
        <div class="formul-contain">
            <div class="lab">
                <label for="pseudo">choisissez un pseudo :</label><br>
                <label for="mdp">mot de passe :</label><br>
                <label for="prenom">votre prénom :</label><br>
                <label for="nom">votre nom :</label><br>
                <label for="age">votre âge :</label><br>
            </div>
            <div class="input">
                <input required type="text" id="pseudo" name="pseudo">
                <input required type="password" name="mdp" id="mdp">
                <input required type="text" id="prenom" name="prenom">
                <input required type="text" id="nom" name="nom">
                <input required type="number" min="0" id="age" name="age">
            </div>
        </div>
        <div>
            <input class="button" type="reset" value="recommencer">
            <input class="button" type="submit" value="inscrire">
        </div>
        
    </form>

</section>

<?php $content = ob_get_clean(); ?>

<?php include_once('../template/template.php'); ?>