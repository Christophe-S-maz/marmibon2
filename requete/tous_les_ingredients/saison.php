<?php 

    $sql = "SELECT saisons.nom
            FROM saisons
            JOIN ingredients
            ON saisons.id_saison = ingredients.id_saison
            WHERE ingredients.id_ingredient = :id_ingredient
            ";
    $query = $pdo->prepare($sql);
    $query->execute(
        array(
            ":id_ingredient" => $id_ingredient_demande
        )
    );
    $data = $query->fetchAll();

    if ($data == true && sizeof($data) > 0) {
       foreach($data as $saison){
        echo $saison['nom'] . "<br>";
       }
    }

?>