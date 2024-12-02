<!DOCTYPE html>
<html lang="en">

<?php 

    session_start();
    
    include("assets/includes/head.html");
    include("assets/includes/header.html");

    $maRoute = explode('/', $_GET['route']);

    if($maRoute[0] == "accueil" || $maRoute[0] == ""){

        include("./pages/accueil.html");

    }
    else if($maRoute[0] == "recettes"){

        if ( !isset($maRoute[1]) || $maRoute[1] == "toutes" || $maRoute[1] == "" ) {

            include("pages/recettes/toutes_recettes.html");

            require("db/connexion.php");
            require("requete/une_recette/toutes_recettes.php");

        } else if ( is_numeric($maRoute[1])  ) {


            require("db/connexion.php");
            include("requete/une_recette/une_recette.php");
        } else {
            include("pages/404notfound.html");
        }
    } else if($maRoute[0] == "ingredients"){

        if (!isset($maRoute[1]) || $maRoute[1] == "tous" || $maRoute[1] == ""){

            include("pages/ingredients/tous_les_ingredients.html");
            require("db/connexion.php");
            include("requete/tous_les_ingredients/tous_les_ingredients.php");

        } else if ( is_numeric($maRoute[1])  ) {

            require("db/connexion.php");
            include("requete/tous_les_ingredients/un_ingredient.php");
        }
    } else if ($maRoute[0] == "connexion"){

        include("pages/connexion/formulaire_connexion.php");
        require("db/connexion.php");
        include("requete/connexion/connexion.php");

    } else if ($maRoute[0] == "profil"){

        include("pages/connexion/profil.php");
    }
    
    else {
        
        include("./pages/404notfound.html");
    }

    
?>

</html>