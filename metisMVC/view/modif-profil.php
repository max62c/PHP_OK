<?php session_start(); ?>

<?php 
    $title = 'Modification profil' ;
    $page = 7 ;
?>

<?php ob_start(); ?>
<?php if(isset($_SESSION['user_logged'])) : ?>

    <section class="mod">
        <div>Modification</div>
        <form method="post">
            <?php
                if (isset($er_nom)){
                ?>
                    <div><?= $er_nom ?></div>
                <?php   
                }
            ?>
            <input type="text" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }else{ echo $afficher_profil['nom'];}?>" required>   
            <?php
                if (isset($er_prenom)){
                ?>
                    <div><?= $er_prenom ?></div>
                <?php   
                }
            ?>
            <input type="text" placeholder="Votre prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }else{ echo $afficher_profil['prenom'];}?>" required>   
            <?php
                if (isset($er_age)){
                ?>
                    <div><?= $er_age ?></div>
                <?php   
                }
            ?>
            <input type="nombre" placeholder="Age" name="age" value="<?php if(isset($age)){ echo $age; }else{ echo $afficher_profil['age'];}?>" required>
            <button type="submit" name="modification">Modifier</button>
        </form>
            </section>
</html>
<?php
 
    // On récupère les informations de l'utilisateur connecté
    $afficher_profil = $DB->query("SELECT * FROM users WHERE id = ?",array($_SESSION['id']));
    $afficher_profil = $afficher_profil->fetch();
 
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
 
        if (isset($_POST['modification'])){
            $nom = htmlentities(trim($nom));
            $prenom = htmlentities(trim($prenom));
            $age = htmlentities(strtolower(trim($age)));
 
            if(empty($nom)){
                $valid = false;
                $er_nom = "Il faut mettre un nom";
            }
 
            if(empty($prenom)){
                $valid = false;
                $er_prenom = "Il faut mettre un prénom";
            }
 
            if(empty($age)){
                $valid = false;
                $er_age = "Il faut mettre un age";
 
            }elseif(!preg_match("/^[0-9\-_.]+\.{2,3}$/i", $age)){
                $valid = false;
                $er_age = "L'age' n'est pas valide";
 
            }else{
                $req_age = $DB->query("SELECT user_age 
                    FROM users 
                    WHERE user_age = ?",
                    array($age));
                $req_age = $req_age->fetch();
 
                if ($req_age['age'] <> "" && $_SESSION['age'] != $req_age['age']){
                    $valid = false;
                    $er_age = "Cet age existe déjà";
                }
            }
 
            if ($valid){
 
                $DB->insert("UPDATE users SET user_prenom = ?, user_nom = ?, user_age = ? 
                    WHERE id = ?", array($prenom, $nom, $age, $_SESSION['id']));
 
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['age'] = $age;
 
                header('Location:  profil.php');
                exit;
            }   
        }
    }
endif;?>