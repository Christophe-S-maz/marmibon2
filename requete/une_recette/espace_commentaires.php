<?php 

    $sql = "SELECT commentaires.message
        FROM commentaires
        JOIN recettes
        ON commentaires.id_recette = recettes.id_recette
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
       foreach($data as $commentaires){
        ?>  <li> <?php echo $commentaires['message'] . " -- "; 
        $com = $commentaires['message'];
        include("requete/une_recette/pseudo.php");

        ?>  </li> <?php
       }
       ?>  </ul> <?php
    }
   
?>