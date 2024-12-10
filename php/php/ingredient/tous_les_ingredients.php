<?php
$nbLigneDonnees=sizeof($data);
if ($nbLigneDonnees > 0) {

    foreach($data as $row){
    
        $id = $row["id_ingredient"];
        
        ?>

        <a href="ingredients/<?php echo $id; ?>" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $row["nom"]; ?></h5>
        </a>
        <?php
    }
}