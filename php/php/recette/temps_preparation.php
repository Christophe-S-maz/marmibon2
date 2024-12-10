<?php

if ($data == true && sizeof($data) > 0) {
    foreach($data as $tempsPrepa){
     echo $tempsPrepa['duree'] . " minutes";
    }
 }