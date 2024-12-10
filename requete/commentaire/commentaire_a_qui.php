<?php 

    require("requete/commentaire/selection_mes_commentaires.php");

    $sql = "SELECT commentaires.id_commentaire FROM commentaires
            WHERE commentaires.id_commentaire = $id_com";

    $query = $pdo->prepare($sql);
    $query->execute();

    $data2 = $query->fetchAll();

    foreach($data as $listeMesCom){

        if($data2[0]["id_commentaire"] == $listeMesCom["id_commentaire"]){

            require("pages/commentaire/option_commentaire.php");
        }
    }

?>
