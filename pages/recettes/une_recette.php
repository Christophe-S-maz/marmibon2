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
            <p class="font-normal text-gray-700 dark:text-gray-400"><?php include("requete/une_recette/espace_commentaires.php"); ?></p>
        </a>
    </a>


    
</body>