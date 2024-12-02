<?php 
    $sql = "SELECT temps.duree
            FROM temps
            JOIN preparations
            ON temps.id_temps_prepa = preparations.id_temps
            WHERE preparations.id_preparation IN (SELECT preparations.id_preparation
                                                  FROM preparations
                                                  JOIN recettes_preparations
                                                  ON preparations.id_preparation = recettes_preparations.id_preparation_rec
                                                  JOIN recettes
                                                  ON recettes_preparations.id_recette = recettes.id_recette
                                                  WHERE recettes.id_recette = :id_recette 
                                                  )
            ";
    $query = $pdo->prepare($sql);
    $query->execute(
        array(
            ":id_recette" => $id_recette_demande
        )
    );
    $data = $query->fetchAll();

    if ($data == true && sizeof($data) > 0) {
       foreach($data as $tempsPrepa){
        echo $tempsPrepa['duree'] . " minutes";
       }
    }

?>