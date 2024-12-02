<?php

    if($_SESSION['estConnecte'] != true){
        header("Location: http://localhost/projet/back/marmibon2/connexion");
    }

?>

<form method="post">
    <input type="submit" name="deconnexion" value="deconnexion">
</form>

<?php 

    echo "Bonjour " . $_SESSION['pseudo'];

    if(isset($_POST['deconnexion'])){

        $_SESSION['estConnecte'] = false;
        $_SESSION['pseudo'] = "";
        header("Location: http://localhost/projet/back/marmibon2/connexion");
    }
?>