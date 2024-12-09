<?php 

    $sql = "SELECT utilisateurs.pseudo FROM utilisateurs";

    $query = $pdo->prepare($sql);
    $query->execute();

    $data = $query->fetchAll();

    $userExiste = false;

    if ($data == true && sizeof($data) > 0) {


        foreach($data as $user){

            if(($user['pseudo'] == $_POST['pseudo']) || ($_POST['pseudo'] == "")){

               $userExiste = true;
            }
        }
    }

