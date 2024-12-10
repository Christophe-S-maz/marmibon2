<?php 
    $sql = "SELECT utilisateurs.mdp FROM utilisateurs
            WHERE utilisateurs.pseudo = '$user'";

    $query = $pdo->prepare($sql);
    $query->execute();

    $data = $query->fetch();

   require("php/php/connexion/verif_mdp.php");
?>