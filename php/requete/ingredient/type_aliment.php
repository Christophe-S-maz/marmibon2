<?php 

    $sql = "SELECT categories.nom
            FROM categories
            JOIN ingredients
            ON categories.id_categorie = ingredients.id_categorie
            WHERE ingredients.id_ingredient = :id_ingredient
            ";
    $query = $pdo->prepare($sql);
    $query->execute(
        array(
            ":id_ingredient" => $id_ingredient_demande
        )
    );
    $data = $query->fetchAll();

    require("php/php/ingredient/type_aliment.php");

?>