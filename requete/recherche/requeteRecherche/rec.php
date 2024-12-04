<?php

     $sql = "SELECT recettes.nom, recettes.id_recette
             FROM recettes
             WHERE recettes.nom LIKE '%$recette%'
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