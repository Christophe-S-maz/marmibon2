<?php 


    require("requete/connexion/verification_user.php");

    if($_POST['mdp'] == $_POST['mdpConfirmer']){
        if ($userExiste == false){

            $sql = "INSERT INTO utilisateurs(pseudo, mdp)
                    VALUES (:pseudo,:mdp)";

            $query = $pdo->prepare($sql);
            $query->execute(
                array(
                    ":pseudo" => $_POST['pseudo'],
                    ":mdp" => password_hash($_POST['mdp'], PASSWORD_DEFAULT)
                )
            );
            $_SESSION['estConnecte'] = true;
            $_SESSION['pseudo'] = $_POST['pseudo'];

            header("Location: profil");
            ob_end_flush();
        } else if($_POST['pseudo'] != ""){
            ?><script>alert("erreur");</script><?php
        }
    } else {
        ?><script>alert("erreur");</script><?php
    }
?>