<?php
 if ($data == true && sizeof($data) > 0) {
    $nomRecette = $data["nom"];
    include("./pages/recettes/une_recette.php");

} else {
    include("./pages/404notfound.html");
}