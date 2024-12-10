<?php
if ($data == true && sizeof($data) > 0) {
    foreach($data as $saison){
     echo $saison['nom'] . "<br>";
    }
 }