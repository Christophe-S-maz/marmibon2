<?php

if ($data == true && sizeof($data) > 0) {
    foreach($data as $etapeRecette){
     echo $etapeRecette['description'];
    }
 }