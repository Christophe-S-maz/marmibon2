<?php 

    $sql = "SELECT utilisateurs.pseudo FROM utilisateurs";

    $query = $pdo->prepare($sql);
    $query->execute();

    $data = $query->fetchAll();

    require("php/php/connexion/verif_user.php");
