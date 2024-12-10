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

    require("php/php/commentaire/verif_commentaire.php");
    
?>