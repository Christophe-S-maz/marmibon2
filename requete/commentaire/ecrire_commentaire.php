<?php

    include("requete/connexion/qui_est_connecte.php");
    include("requete/commentaire/verif_commentaire.php");


    if(!$message_deja_poste){

        $sql = "INSERT INTO commentaires(msg, id_recette, id_utilisateur)
                VALUES (:msg, :id_recette, :id_utilisateur)";

        $query = $pdo->prepare($sql);
        $query->execute(
            array(
                ":msg" => $_POST['message'],
                ":id_recette" => $id_recette_demande,
                ":id_utilisateur" => $id_user
            )
        );
    }

    

?> 