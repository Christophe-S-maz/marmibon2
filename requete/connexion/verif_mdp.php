<?php 
    $sql = "SELECT utilisateurs.mdp FROM utilisateurs
            WHERE utilisateurs.pseudo = '$user'";

    $query = $pdo->prepare($sql);
    $query->execute();

    $data = $query->fetch();

    if(password_verify($_POST['mdp'], $data['mdp'])){
        $_SESSION['estConnecte'] = true;
        $_SESSION['pseudo'] = $user;
    }else {
        ?><script> alert("erreur");</script><?php
    }
?>