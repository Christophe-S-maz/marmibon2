<?php 
if ($data == true && sizeof($data) > 0) {
    $nomIngredient = $data["nom"];
    include("./pages/ingredients/un_ingredient.php");

} else {
    include("./pages/404notfound.html");
}
