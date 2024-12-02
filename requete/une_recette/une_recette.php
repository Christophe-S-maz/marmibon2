<?php 

$id_recette_demande = $maRoute[1];

$sql = "SELECT * FROM recettes WHERE id_recette = :id_recette";

$query = $pdo->prepare($sql);
$query->execute(
    array(
        ":id_recette" => $id_recette_demande
    )
);

$data = $query->fetch();

if ($data == true && sizeof($data) > 0) {
    $nomRecette = $data["nom"];
    include("./pages/recettes/une_recette.php");

} else {
    include("./pages/404notfound.html");
}

?>