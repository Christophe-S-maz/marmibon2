<?php 

    if(isset($_POST['deconnexion'])){

        $_SESSION['estConnecte'] = false;
        $_SESSION['pseudo'] = "";
        header("Location: connexion");
    }

?>