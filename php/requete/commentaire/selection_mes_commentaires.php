<?php 

    require("php/requete/connexion/qui_est_connecte.php");

    $sql = "SELECT commentaires.id_commentaire
            FROM commentaires
            WHERE commentaires.id_utilisateur = :id_user
            AND commentaires.id_recette = :id_recette";
            

    $query = $pdo->prepare($sql);

    $query->execute(
        array(
            ":id_user" => $id_user,
            ":id_recette" => $id_recette_demande
        )
        );

    $data = $query->fetchAll();
    

?>