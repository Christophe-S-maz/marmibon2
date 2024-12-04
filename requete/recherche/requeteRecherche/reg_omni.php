<?php

     $sql = "SELECT recettes.nom, recettes.id_recette
             FROM recettes
             WHERE recettes.id_recette IN (SELECT recettes.id_recette FROM recettes
                                        JOIN ingredients_recettes
                                        ON recettes.id_recette = ingredients_recettes.id_recette
                                        JOIN ingredients
                                        ON ingredients_recettes.id_ingredient = ingredients.id_ingredient
                                        JOIN ingredients_regimes
                                        ON ingredients.id_ingredient = ingredients_regimes.id_ingredient
                                        JOIN regimes_alimentaire
                                        ON ingredients_regimes.id_regime = regimes_alimentaire.id_regime
                                        WHERE regimes_alimentaire.nom = '$regime'
                                        GROUP BY recettes.id_recette
                                        )
                            
             ";

        $query = $pdo->prepare($sql);
        $query->execute();

        $data = $query->fetchAll();

        if ($data == true && sizeof($data) > 0) {
            foreach($data as $recettes){
                $id = $recettes["id_recette"];
                echo "" ?> <li> <a class= "lienListe" href="recettes/<?php echo $id ?>"><?php echo $recettes["nom"] . "<br>"; ?> </a> </li><?php
            }
         }
?>