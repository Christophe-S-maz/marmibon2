<?php

     $sql = "SELECT recettes.nom, recettes.id_recette, preparations.titre
             FROM recettes
             JOIN recettes_preparations
             ON recettes.id_recette = recettes_preparations.id_recette
             JOIN preparations
             ON recettes_preparations.id_preparation_rec = preparations.id_preparation
             WHERE recettes.nom LIKE '%$recette%'
             ";

        $query = $pdo->prepare($sql);
        $query->execute();

        $data = $query->fetchAll();

       
?>