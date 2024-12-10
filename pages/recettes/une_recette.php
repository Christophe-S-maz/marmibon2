<body>
   
    <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $nomRecette ?></h5>
        <h6 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">Liste des ingrédients :</h6>
        <p class="font-normal text-gray-700 dark:text-gray-400"> <?php include("requete/une_recette/liste_ingredient.php"); ?></p>
        <h6 class="mt-2 mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">Preparation : </h6>
        <p class="font-normal text-gray-700 dark:text-gray-400"> Difficulté : <?php include("requete/une_recette/difficulte.php"); ?></p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Temps de préparation : <?php include("requete/une_recette/temps_preparation.php"); ?></p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Temps de cuisson : <?php include("requete/une_recette/temps_cuisson.php"); ?></p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Étapes de la recette : <?php include("requete/une_recette/etape_recette.php"); ?></p>
        
        <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h6 class="mt-2 mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">Espace commentaire : </h6>
        </a>
                <?php

                    if(!isset($_POST["message"])){

                        $_POST['message'] = "";
                    }

                    if($_SESSION['estConnecte']){

                        ?>
                            <div class="formulaire">

                                <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                                    <form method="post" class="space-y-6" >
                                        <div>
                                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Donnez votre avis sur cette recette</label>
                                            <textarea name= "message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Votre commentaire"></textarea>
                                        </div>
                                        <button type="submit" name="envoi" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Poster</button>
                                    </form>
                                </div>
                            </div>
                        <?php

                    if(isset($_POST['message']) && $_POST['message'] != ""){ 

                    include("requete/commentaire/ecrire_commentaire.php");

                    }
                }
                ?>
            <?php include("requete/commentaire/espace_commentaires.php"); ?> 
            
        </a>
    </a>
</body>