<?php session_start(); ?>

<?php 
    $title = 'accueil' ;
    $page = 1 ;
?>

<?php ob_start(); ?>

<h2>accueil</h2>

<p>bienvenue sur ce site d'architecture MVC. <br>
ceci est l'accueil ;) .</p>

<?php $content = ob_get_clean(); ?>

<?php include_once('../template/template.php'); ?>
<?php include_once('../template/footer.php'); ?>