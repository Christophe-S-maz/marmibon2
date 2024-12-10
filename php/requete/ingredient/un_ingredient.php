<?php 

    $id_ingredient_demande = $maRoute[1];

    $sql = "SELECT * FROM ingredients WHERE id_ingredient = :id_ingredient";

    $query = $pdo->prepare($sql);
    $query->execute(
        array(
            ":id_ingredient" => $id_ingredient_demande
        )
    );

    $data = $query->fetch();

    require("php/php/ingredient/un_ingredient.php");
?>
