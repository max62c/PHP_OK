<?php session_start(); ?>

<?php $title = 'comfirmation'; ?>

<?php ob_start(); ?>

<p>votre compte a été crée.</p>

<?php $content = ob_get_clean(); ?>

<?php include_once('../template/template.php'); ?>