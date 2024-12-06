<div class="centre">
    <?php 

        $sql = 'SELECT *, recettes.nom, recettes.id_recette, preparations.titre
                FROM recettes
                JOIN recettes_preparations
                ON recettes.id_recette = recettes_preparations.id_recette
                JOIN preparations
                ON recettes_preparations.id_preparation_rec = preparations.id_preparation';
        $query = $pdo->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
        $nbLigneDonnees=sizeof($data);
        if ($nbLigneDonnees > 0) {

            foreach($data as $row){
            
                $id = $row["id_recette"];
                
                ?>

                <a href="recettes/<?php echo $id; ?>" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $row["nom"]; ?></h5>
                <p class="font-normal text-gray-700 dark:text-gray-400"><?php echo $row["titre"]; ?></p>
                </a>
                <?php
            }

            
        }
    ?>
</div>


