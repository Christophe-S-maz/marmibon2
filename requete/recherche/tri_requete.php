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
                
                include("requete/recherche/requeteRecherche/rec_ing_rep.php");
                
            } else {

                // requete avec 1 et 2
                
                include("requete/recherche/requeteRecherche/rec_ing.php");
            }
        } else if ($regime_alimentaire_declare){

            if($repas_declare){

                //requete avec 1, 3 et 4
                if($regime == "omnivore"){

                include("requete/recherche/requeteRecherche/rec_reg_rep_omni.php");

               }else {

                include("requete/recherche/requeteRecherche/rec_ing_reg_vege.php");
               }

            } else {

                //requete 1 et 3
                if($regime == "omnivore"){

                    include("requete/recherche/requeteRecherche/rec_reg_omni.php");

                } else {

                    include("requete/recherche/requeteRecherche/rec_reg_vege.php");

                }
            }
        } else if ($repas_declare){

            // requete avec 1 et 4
            include("requete/recherche/requeteRecherche/rec_rep.php");

        } else {

            //requete 1
            include("requete/recherche/requeteRecherche/rec.php");

        }
    } else if ($nom_ingredient_declare){

        if($regime_alimentaire_declare){

            if($repas_declare){

                //requete 2, 3 et 4
                if($regime == "omnivore"){

                    include("requete/recherche/requeteRecherche/ing_reg_rep_omni.php");

                } else {

                    include("requete/recherche/requeteRecherche/ing_reg_rep_vege.php");

                }
            } else {

                //requete 2 et 3
                if($regime == "omnivore"){

                    include("requete/recherche/requeteRecherche/ing_reg_omni.php");

                } else{

                    include("requete/recherche/requeteRecherche/");

                }
            }
        } else if($repas_declare){

            //requete 2 et 4
            include("requete/recherche/requeteRecherche/ing_rep.php");

        } else {

            //requete 2
            include("requete/recherche/requeteRecherche/ing.php");

        }
    } else if($regime_alimentaire_declare){

        if($repas_declare){

            //requete 3 et 4
            if($regime == "omnivore"){

                include("requete/recherche/requeteRecherche/reg_rep_omni.php");

            } else {

                include("requete/recherche/requeteRecherche/reg_rep_vege.php");

            }
        } else {

            //requete 3

            if($regime == "omnivore"){

                include("requete/recherche/requeteRecherche/reg_omni.php");

            } else {

                include("requete/recherche/requeteRecherche/reg_vege.php");
            }
        }
    } else if($repas_declare){

        //requete 4
        include("requete/recherche/requeteRecherche/rep.php");

    } else{

        echo "";
    }

?>