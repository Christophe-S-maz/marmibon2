<?php

    $sql = "SELECT utilisateurs.pseudo FROM utilisateurs";

    $query = $pdo->prepare($sql);
    $query->execute();

    $data = $query->fetchAll();

    if ($data == true && sizeof($data) > 0) {

        foreach($data as $user){

            if($user['pseudo'] == $_POST['pseudo'] && $_POST['pseudo'] != ""){

                $user = $user['pseudo'];

                include("requete/connexion/verif_mdp.php");
            }
        }
    }

    if($_SESSION['estConnecte'] == true){
        header("Location: profil");
    }
?>

