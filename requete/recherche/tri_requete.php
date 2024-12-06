<?php 

    if(($nom_recette_declare || $nom_ingredient_declare || $regime_alimentaire_declare || $repas_declare)){

        echo "Résultat(s) de votre recherche : " . "<br>";

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


            ?><p> Aucun résultat, voici la liste complète de nos recettes</p> <?php
        }

        if ($data == true && sizeof($data) > 0) {
            foreach($data as $recettes){
                
                $id = $recettes["id_recette"];
                
                ?>

                <a href="recettes/<?php echo $id; ?>" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $recettes["nom"]; ?></h5>
                <p class="font-normal text-gray-700 dark:text-gray-400"><?php echo $recettes["titre"]; ?></p>
                </a>
                <?php
            }
         }
    }

?>