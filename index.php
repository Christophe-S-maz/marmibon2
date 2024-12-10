<!DOCTYPE html>
<html lang="en">

<?php 

    session_start();
    if(!isset($_SESSION["estConnecte"])){
        $_SESSION["estConnecte"] =  false;
    }
    
    ob_start();

    include("assets/includes/head.html");
    include("assets/includes/header.html");

    $maRoute = explode('/', $_GET['route']);

    if($maRoute[0] == "accueil" || $maRoute[0] == ""){

        include("./pages/accueil.html");

    }
    else if($maRoute[0] == "recettes"){

        if ( !isset($maRoute[1]) || $maRoute[1] == "toutes" || $maRoute[1] == "" ) {

            include("pages/recherche/filtre.html");
            require("db/connexion.php");
            require("pages/recherche/filtre.php");

            if(!($nom_recette_declare || $nom_ingredient_declare || $regime_alimentaire_declare || $repas_declare)){
                
                include("pages/recettes/toutes_recettes.html");

                require("db/connexion.php");
                require("php/requete/recette/toutes_recettes.php");
            }

        } else if ( is_numeric($maRoute[1])  ) {


            require("db/connexion.php");
            require("php/requete/recette/une_recette.php");

        } else {
            include("pages/404notfound.html");
        }
    } else if($maRoute[0] == "ingredients"){

        if (!isset($maRoute[1]) || $maRoute[1] == "tous" || $maRoute[1] == ""){

            include("pages/ingredients/tous_les_ingredients.html");
            require("db/connexion.php");
            require("php/requete/ingredient/tous_les_ingredients.php");

        } else if ( is_numeric($maRoute[1])  ) {

            require("db/connexion.php");
            require("php/requete/ingredient/un_ingredient.php");
        }
    } else if ($maRoute[0] == "connexion"){

        require("pages/connexion/formulaire_connexion.php");
        require("db/connexion.php");
        require("php/requete/connexion/connexion.php");

    } else if ($maRoute[0] == "inscription"){

        require("pages/connexion/formulaire_inscription.php");
        require("db/connexion.php");
        require("php/requete/connexion/inscription.php");

    } else if ($maRoute[0] == "profil"){

        require("pages/connexion/profil.php");
        
    }
    
    else {
        
        include("./pages/404notfound.html");
    }

    
?>


</html>