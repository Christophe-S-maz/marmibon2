<div class="centre">
    <?php

        if($_SESSION['estConnecte'] != true){
            header("Location: connexion");
        }

    ?>

    <?php 

        echo "Bonjour " . $_SESSION['pseudo'];

        include("php/php/connexion/deconnexion.php");
    ?>


    <form method="post">
        <input type="submit" name="deconnexion" value="deconnexion">
    </form>
</div>