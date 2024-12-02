<body>
    <h1><?php echo $nomRecette ; ?></h1>

    <h3>Liste des ingrédients : </h3>

    <?php include("requete/une_recette/liste_ingredient.php"); ?>

    <h3>Préparation : </h3>

    <p>Difficulté : <?php include("requete/une_recette/difficulte.php"); ?></p>
    <p> Temps de préparation : <?php include("requete/une_recette/temps_preparation.php"); ?></p>
    <p> Temps de cuisson : <?php include("requete/une_recette/temps_cuisson.php"); ?></p>
    <p> Étapes de la recette : <?php include("requete/une_recette/etape_recette.php"); ?></p>
    
    <h3>Espace commentaires : </h3>
    
    <?php include("requete/une_recette/espace_commentaires.php"); ?>

    
</body>