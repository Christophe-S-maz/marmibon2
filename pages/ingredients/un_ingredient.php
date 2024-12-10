<body>

    <div class="centre">
        <h1><?php echo $nomIngredient ; ?></h1>

        <h3>Saison de récolte :</h3>

        <?php include("php/requete/ingredient/saison.php"); ?>

        <h3>Type d'aliment :</h3>

        <?php include("php/requete/ingredient/type_aliment.php"); ?>
    </div>
</body>