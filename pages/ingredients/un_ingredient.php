<body>

    <div class="centre">
        <h1><?php echo $nomIngredient ; ?></h1>

        <h3>Saison de récolte :</h3>

        <?php include("requete/tous_les_ingredients/saison.php"); ?>

        <h3>Type d'aliment :</h3>

        <?php include("requete/tous_les_ingredients/type_aliment.php"); ?>
    </div>
</body>