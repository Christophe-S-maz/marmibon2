<?php 

if(isset($_POST['nomRecette']) && !empty($_POST['nomRecette'])){

    $nom_recette_declare = true;
    $recette = $_POST['nomRecette'];
} else {
    $nom_recette_declare = false;
}

?>