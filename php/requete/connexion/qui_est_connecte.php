<?php

    $sql = "SELECT utilisateurs.id_utilisateur
            FROM utilisateurs
            WHERE utilisateurs.pseudo = :pseudo
            ";

    $query = $pdo->prepare($sql);
    $query->execute(
        array(
            ":pseudo" => $_SESSION['pseudo']
        )
    );

    $data = $query->fetch();

    $id_user = $data["id_utilisateur"];


?>