<?php 

    include("");
    
    $sql = "DELETE *
            FROM comentaires
            WHERE commentaires.id_commentaire = (SELECT commentaires.id_commentaire FROM commentaires
                                                WHERE commentaires.id_utilisateur = :id_utilisateur
                                                AND commentaires.msg = :msg";

    $query = $pdo->prepare($sql);
    $query->execute(
        array(
            ":id_utilisateur" => $_SESSION["pseudo"],
            ":msg" => ""
        )
    )

    // a finir

?>