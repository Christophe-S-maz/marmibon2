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
             
             AND recettes.id_recette IN (SELECT recettes.id_recette FROM recettes
                                        JOIN ingredients_recettes
                                        ON recettes.id_recette = ingredients_recettes.id_recette
                                        JOIN ingredients
                                        ON ingredients_recettes.id_ingredient = ingredients.id_ingredient
                                        JOIN ingredients_regimes
                                        ON ingredients.id_ingredient = ingredients_regimes.id_ingredient
                                        JOIN regimes_alimentaire
                                        ON ingredients_regimes.id_regime = regimes_alimentaire.id_regime
                                        WHERE regimes_alimentaire.nom = '$regime'
                                        OR regimes_alimentaire.nom = 'vegetarien'
                                        GROUP BY recettes.id_recette
                                        )
                            
             AND recettes.id_recette IN (SELECT recettes.id_recette FROM recettes
                                        JOIN repas
                                        ON recettes.id_repas = repas.id_repas
                                        WHERE repas.nom = '$repas'
                                        )
             ";

        $query = $pdo->prepare($sql);
        $query->execute();

        $data = $query->fetchAll();

        
?>