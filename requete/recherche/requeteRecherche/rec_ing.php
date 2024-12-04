<?php

     $sql = "SELECT recettes.nom, recettes.id_recette
             FROM recettes
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

        if ($data == true && sizeof($data) > 0) {
            foreach($data as $recettes){
                $id = $recettes["id_recette"];
                echo "" ?> <li> <a class= "lienListe" href="recettes/<?php echo $id ?>"><?php echo $recettes["nom"] . "<br>"; ?> </a> </li><?php
            }
         }
?>