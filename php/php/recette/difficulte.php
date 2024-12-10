<?php

if ($data == true && sizeof($data) > 0) {
    foreach($data as $difficulte){
     echo $difficulte['nom'] . "<br>";
    }
 }