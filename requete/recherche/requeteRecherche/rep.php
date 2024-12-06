<?php

     $sql = "SELECT recettes.nom, recettes.id_recette, preparations.titre
             FROM recettes
             JOIN recettes_preparations
             ON recettes.id_recette = recettes_preparations.id_recette
             JOIN preparations
             ON recettes_preparations.id_preparation_rec = preparations.id_preparation
             WHERE recettes.id_recette IN (SELECT recettes.id_recette FROM recettes
                                   JOIN repas
                                   ON recettes.id_repas = repas.id_repas
                                   WHERE repas.nom = '$repas'
                                   )
             ";

        $query = $pdo->prepare($sql);
        $query->execute();

        $data = $query->fetchAll();

       
?>