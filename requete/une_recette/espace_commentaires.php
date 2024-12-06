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

        
       foreach($data as $commentaires){

            ?>  <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"> <?php echo $commentaires['message'] . " -- "; 
            $com = $commentaires['message'];
            include("requete/une_recette/pseudo.php");

            ?>  </a> <?php
       }
       ?>  </ul> <?php
    }
   
?>