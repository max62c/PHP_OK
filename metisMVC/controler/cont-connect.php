<?php session_start();

require('../model/model.php');

$loginRequested = req_connect($_POST);

if(isset($loginRequested[0])) {
    $_SESSION['user_logged'] = $loginRequested[0];
    header('location:../view/dashboard.php');
} else {
    header('location:../view/login.php?erreur=1');
}
