<?php

     $sql = "SELECT recettes.nom, recettes.id_recette, preparations.titre
             FROM recettes
             JOIN recettes_preparations
             ON recettes.id_recette = recettes_preparations.id_recette
             JOIN preparations
             ON recettes_preparations.id_preparation_rec = preparations.id_preparation
             WHERE recettes.nom LIKE '%$recette%'

             AND recettes.id_recette IN (SELECT recettes.id_recette FROM recettes
                                        JOIN ingredients_recettes
                                        ON recettes.id_recette = ingredients_recettes.id_recette
                                        JOIN ingredients
                                        ON ingredients_recettes.id_ingredient = ingredients.id_ingredient
                                        WHERE ingredients.nom LIKE '%$ingredient%'
                                        )
             
             ";

        $query = $pdo->prepare($sql);
        $query->execute();

        $data = $query->fetchAll();

       
?>