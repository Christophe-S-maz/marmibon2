<?php 

    $sql = 'SELECT * FROM recettes';
    $query = $pdo->prepare($sql);
    $query->execute();
    $data = $query->fetchAll();
    $nbLigneDonnees=sizeof($data);
    if ($nbLigneDonnees > 0) {

        echo "Nom de la recette : <br>" ;

        foreach($data as $row){
           
            $id = $row["id_recette"];
            echo "" ?> <a class= "lienListe" href="http://localhost/projet/back/marmi/marmibon2/recettes/<?php echo $id ?>"><?php echo $row["nom"] . "<br>"; ?> </a> <?php
        }
    }
?>



