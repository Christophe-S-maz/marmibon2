<?php

$userExiste = false;

if ($data == true && sizeof($data) > 0) {


    foreach($data as $user){

        if(($user['pseudo'] == $_POST['pseudo']) || ($_POST['pseudo'] == "")){

           $userExiste = true;
        }
    }
}
