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

if ($data == true && sizeof($data) > 0) {
    $nomIngredient = $data["nom"];
    include("./pages/ingredients/un_ingredient.php");

} else {
    include("./pages/404notfound.html");
}

?>
