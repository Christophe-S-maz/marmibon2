<?php
$data = $query->fetchAll();

if ($data == true && sizeof($data) > 0) {

    
   foreach($data as $commentaires){

        ?>  <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"> <?php echo $commentaires['msg'] . " -- "; 
        $com = $commentaires['msg'];
        $id_com = $commentaires["id_commentaire"];
        include("php/requete/connexion/pseudo.php");

        if($_SESSION['estConnecte']){

            include("php/requete/commentaire/commentaire_a_qui.php");

        }
        ?>  </a> <?php
   }
   ?>  </ul> <?php
}
?>