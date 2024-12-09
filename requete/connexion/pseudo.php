<?php 
    $sql = "SELECT utilisateurs.pseudo
            FROM utilisateurs
            JOIN commentaires
            ON  utilisateurs.id_utilisateur = commentaires.id_utilisateur
            JOIN recettes
            ON commentaires.id_recette = recettes.id_recette
            WHERE recettes.id_recette = :id_recette AND commentaires.msg = :commentaire
            ";
    $query = $pdo->prepare($sql);
    $query->execute(
        array(
            ":id_recette" => $id_recette_demande,
            ":commentaire" => $com
        )
    );
    $data = $query->fetchAll();

    if ($data == true && sizeof($data) > 0) {
       foreach($data as $pseudo){
        echo $pseudo['pseudo'];
       }
    }

?>