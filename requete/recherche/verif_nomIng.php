<?php 

if(isset($_POST['nomIngredient']) && !empty($_POST['nomIngredient'])){

    $nom_ingredient_declare = true;
    $ingredient = $_POST['nomIngredient'];
}else{
    $nom_ingredient_declare = false;
}

?>