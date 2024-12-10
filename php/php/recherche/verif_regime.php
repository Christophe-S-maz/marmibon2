<?php 

if(isset($_POST['regimeAlimentaire']) && !empty($_POST['regimeAlimentaire'])){

    $regime_alimentaire_declare = true;
    $regime = $_POST['regimeAlimentaire'];
}else{
    $regime_alimentaire_declare = false;
}

?>