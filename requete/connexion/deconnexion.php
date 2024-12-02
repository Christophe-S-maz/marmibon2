<?php 

    if(isset($_POST['deconnexion'])){

        $_SESSION['estConnecte'] = false;
        $_SESSION['pseudo'] = "";
        header("Location: http://localhost/projet/back/marmi/marmibon2/connexion");
    }

?>