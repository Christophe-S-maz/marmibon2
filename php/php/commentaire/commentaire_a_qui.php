<?php 

foreach($data as $listeMesCom){

    if($data2[0]["id_commentaire"] == $listeMesCom["id_commentaire"]){

        require("pages/commentaire/option_commentaire.php");
    }
}
?>