<?php

if ($data == true && sizeof($data) > 0) {
    foreach($data as $tempsCuisson){
     echo $tempsCuisson['duree'] . " minutes";
    }
 }