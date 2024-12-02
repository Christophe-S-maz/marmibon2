<?php 

    $sql = "SELECT ingredients.nom
        FROM ingredients
        JOIN ingredients_recettes
        ON ingredients.id_ingredient = ingredients_recettes.id_ingredient
        JOIN recettes
        ON ingredients_recettes.id_recette = recettes.id_recette
        WHERE recettes.id_recette = :id_recette";

    $query = $pdo->prepare($sql);
    $query->execute(
        array(
            ":id_recette" => $id_recette_demande
        )
    );

    $data = $query->fetchAll();

    if ($data == true && sizeof($data) > 0) {
        ?> <ul>  <?php
       foreach($data as $ingredients){
        ?>  <li> <?php echo $ingredients['nom'] . "<br>"; ?>  </li> <?php
       }
       ?>  </ul> <?php
    }
   
?>