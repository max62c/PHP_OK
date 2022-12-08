<?php session_start(); ?>

<?php 
    $title = 'connection';
    $page = 2;
?>

<?php ob_start(); ?>

<h2>vous connectez :</h2>

<section class="sub">

    <form action="../controler/cont-connect.php" method="POST" class="formul">
        <div class="formul-contain">
            <div class="lab">
                <label for="pseudo"> pseudo :</label><br>
                <label for="mdp">mot de passe :</label><br>
            </div>
            <div class="input">
                <input required type="text" id="pseudo" name="pseudo">
                <input required type="password" name="mdp" id="mdp">
            </div>
        </div>
        <div>
            <input class="button" type="reset" value="recommencer">
            <input class="button" type="submit" value="connection">
        </div>
        <?php if(isset($_GET['erreur'])) : ?>
            <p>pseudo ou mot de passe incorrect.</p>
        <?php endif; ?>
        
    </form>

</section>

<?php $content = ob_get_clean(); ?>

<?php include_once('../template/template.php'); ?>