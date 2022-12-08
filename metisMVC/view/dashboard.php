<?php session_start(); ?>

<?php 
    $title = 'tableau de bord' ;
    $page = 3 ;
?>

<?php ob_start(); ?>
<?php if(isset($_SESSION['user_logged'])) : ?>
<h2>tableau de bord :</h2>

<p>vous êtes connecté sous le pseudo <?= $_SESSION['user_logged']['user_pseudo'] ?> <br>
vous vous appelez <?= $_SESSION['user_logged']['user_prenom'] ?> <?= $_SESSION['user_logged']['user_nom'] ?><br>
vous avez <?= $_SESSION['user_logged']['user_age'] ?> ans.<br></p>


<?php else: ?>
    <p>vous n êtes pas connecté.</p>
<?php endif; ?>

<?php $content = ob_get_clean(); ?>

<?php include_once('../template/template.php'); ?>
<?php include_once('../template/footer.php'); ?>