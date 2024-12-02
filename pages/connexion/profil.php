<?php

    if($_SESSION['estConnecte'] != true){
        header("Location: http://localhost/projet/back/marmi/marmibon2/connexion");
    }

?>

<?php 

    echo "Bonjour " . $_SESSION['pseudo'];

    include("requete/connexion/deconnexion.php");
?>


<form method="post">
    <input type="submit" name="deconnexion" value="deconnexion">
</form>