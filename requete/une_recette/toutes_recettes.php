<div class="centre">
    <?php 

        $sql = 'SELECT * FROM recettes';
        $query = $pdo->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
        $nbLigneDonnees=sizeof($data);
        if ($nbLigneDonnees > 0) {

            echo "Nom de la recette : <br>" ;

            ?> <ul><?php

            foreach($data as $row){
            
                $id = $row["id_recette"];
                echo "" ?> <li> <a class= "lienListe" href="recettes/<?php echo $id ?>"><?php echo $row["nom"] . "<br>"; ?> </a> </li><?php
            }

            ?> </ul><?php
        }
    ?>
</div>


