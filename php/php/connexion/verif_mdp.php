<?php

if(password_verify($_POST['mdp'], $data['mdp'])){
    $_SESSION['estConnecte'] = true;
    $_SESSION['pseudo'] = $user;
}else {
    ?><script> alert("erreur");</script><?php
}