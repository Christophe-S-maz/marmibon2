<?php

     $sql = "SELECT recettes.nom, recettes.id_recette
             FROM recettes
             WHERE recettes.id_recette IN (SELECT recettes.id_recette FROM recettes
                                   JOIN repas
                                   ON recettes.id_repas = repas.id_repas
                                   WHERE repas.nom = '$repas'
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