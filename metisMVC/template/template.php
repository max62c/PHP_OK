<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>MVC - <?= $title ?></title>
</head>

<body>
    <?php if(!isset($page)) {
        $page = NULL;
    } ?>
    <header class="header">
        <div class="logo">
            <img src="../img/logo_Afpa.png" alt="logo">
        </div>

        <h2 class="heading">architecture MVC</h2>

        <nav class="nav-button">
            <a href="../view/home.php"><button class="button" <?php if($page == 1) : ?> disabled <?php endif; ?>>accueil</button></a>
            <?php if (isset($_SESSION['user_logged'])) : ?>
                <a href="../view/dashboard.php"><button class="button" <?php if($page == 3) : ?> disabled <?php endif; ?>>tableau de bord</button></a>
                <a href="../view/modif-profil.php"><button class="button" <?php if($page == 7) : ?> disabled <?php endif; ?>>Profil</button></a>
                <a href="../controler/cont-disconnect.php"><button class="button">deconnexion</button></a>
            <?php else : ?>
                <a href="../view/register.php"><button class="button" <?php if($page == 4) : ?> disabled <?php endif; ?>>s'inscrire</button></a>
                <a href="../view/login.php"><button class="button" <?php if($page == 2) : ?> disabled <?php endif; ?>>connexion</button></a>
            <?php endif; ?>
        </nav>
    </header>

    <main>
        <?= $content ?>
    </main>

</body>

</html>