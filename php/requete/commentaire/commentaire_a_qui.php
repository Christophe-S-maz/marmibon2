<?php 

    require("php/requete/commentaire/selection_mes_commentaires.php");

    $sql = "SELECT commentaires.id_commentaire FROM commentaires
            WHERE commentaires.id_commentaire = $id_com";

    $query = $pdo->prepare($sql);
    $query->execute();

    $data2 = $query->fetchAll();

    require("php/php/commentaire/commentaire_a_qui.php");

?>
