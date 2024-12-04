<?php 

if(isset($_POST['repas']) && !empty($_POST['repas'])){

    $repas_declare = true;
    $repas = $_POST['repas'];
}else{
    $repas_declare = false;
}

?>