<?php
if ($data == true && sizeof($data) > 0) {
    foreach($data as $pseudo){
     echo $pseudo['pseudo'];
    }
 }