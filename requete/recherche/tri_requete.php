<?php 

    if($nom_recette_declare){

        if($nom_ingredient_declare){

            if($regime_alimentaire_declare){

                if($repas_declare){

                    // requete avec les 4 filtres
                    if($regime == "omnivore"){

                        include("requete/recherche/requeteRecherche/tous_les_filtres_omni.php");
                    } else {

                        include("requete/recherche/requeteRecherche/tous_les_filtres_vege.php");
                    }
                                               
                } else{

                    // requete 1, 2 et 3
                    if($regime == "omnivore"){

                        include("requete/recherche/requeteRecherche/rec_ing_reg_omni.php");
                    } else {

                        include("requete/recherche/requeteRecherche/rec_ing_reg_vege.php");
                    }
                }
            } else if($repas_declare){

                // requete avec 1, 2 et 4
                echo "1,2 et 4";
                
            } else {

                // requete avec 1 et 2
                echo "1 et 2";
            }
        } else if ($regime_alimentaire_declare){

            if($repas_declare){

                //requete avec 1, 3 et 4
                echo "1,3 et 4";
            } else {

                //requete 1 et 3
                echo "1 et 3";
            }
        } else if ($repas_declare){

            // requete avec 1 et 4
            echo "1 et 4";
        } else {

            //requete 1
            echo "1";
        }
    } else if ($nom_ingredient_declare){

        if($regime_alimentaire_declare){

            if($repas_declare){

                //requete 2, 3 et 4
                echo "2, 3 et 4";
            } else {

                //requete 2 et 3
                echo "2 et 3";
            }
        } else if($repas_declare){

            //requete 2 et 4
            echo "2 et 4";
        } else {

            //requete 2
            echo "2";
        }
    } else if($regime_alimentaire_declare){

        if($repas_declare){

            //requete 3 et 4
            echo "3 et 4";
        } else {

            //requete 3

            echo "3";
        }
    } else if($repas_declare){

        //requete 4
        echo "4";
    } else{

        echo "rien";
    }

?>