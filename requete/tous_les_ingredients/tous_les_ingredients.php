<?php 

    $sql = 'SELECT * FROM ingredients';
    $query = $pdo->prepare($sql);
    $query->execute();
    $data = $query->fetchAll();
    $nbLigneDonnees=sizeof($data);
    if ($nbLigneDonnees > 0) {

        echo "Nom de l'ingredient : <br>";

        foreach($data as $row){
            $id = $row["id_ingredient"];
            echo "" ?> <a class= "lienListe" href="ingredients/<?php echo $id ?>"><?php echo $row["nom"] . "<br>"; ?> </a> <?php
        }
    }
?>
