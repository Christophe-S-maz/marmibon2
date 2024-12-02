<?php 
    $sql = "SELECT difficultes.nom
            FROM difficultes
            JOIN preparations
            ON difficultes.id_difficulte = preparations.id_difficulte
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
       foreach($data as $difficulte){
        echo $difficulte['nom'] . "<br>";
       }
    }

?>