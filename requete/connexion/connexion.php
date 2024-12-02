<?php

    $sql = "SELECT utilisateurs.pseudo, utilisateurs.mdp FROM utilisateurs";

    $query = $pdo->prepare($sql);
    $query->execute();

    $data = $query->fetchAll();

    $i = 0;

    if ($data == true && sizeof($data) > 0) {


        foreach($data as $user){

            if($user['pseudo'] == $_POST['pseudo'] && $user['mdp'] == $_POST['mdp']){

                $_SESSION['estConnecte'] = true;
                $_SESSION['pseudo'] = $user['pseudo'];
            }
        }
    }


    if($_SESSION['estConnecte']){
        header("Location: http://localhost/projet/back/marmi/marmibon2/profil");
    }
?>