<?php

    $sql = "SELECT commentaires.msg, commentaires.id_utilisateur
    FROM commentaires
    JOIN recettes
    ON commentaires.id_recette = recettes.id_recette
    WHERE recettes.id_recette = :id_recette";

    $query = $pdo->prepare($sql);
    $query->execute(
    array(
        ":id_recette" => $id_recette_demande
    )
    );

    $data = $query->fetchAll();

    $message_deja_poste = false;

    if ($data == true && sizeof($data) > 0) {

        foreach($data as $message){

            if($_POST['message'] == $message["msg"]){

                if($id_user == $message["id_utilisateur"]){

                    $message_deja_poste = true;
                }
            }
        }
    }
    
?>