<?php

$message_deja_poste = false;

if ($data == true && sizeof($data) > 0) {

    foreach($data as $message){

        if($_POST['message'] == $message["msg"]){

            if($id_user == $message["id_utilisateur"]){

                $message_deja_poste = true;
            }
        }
    }
}