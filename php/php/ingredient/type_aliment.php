<?php 
if ($data == true && sizeof($data) > 0) {
    foreach($data as $typeAliment){
     echo $typeAliment['nom'] . "<br>";
    }
 }