<div class="centre">
    <?php 

        $sql = 'SELECT * FROM ingredients';
        $query = $pdo->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
        require("php/php/ingredient/tous_les_ingredients.php");
    ?>
</div>