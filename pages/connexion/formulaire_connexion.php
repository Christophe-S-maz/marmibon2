<?php

    if($_SESSION['estConnecte'] == true){
        header("Location: http://localhost/projet/back/marmi/marmibon2/profil");
    }
    if(empty($_POST['pseudo'])){
        $_POST['pseudo'] = "";
        $_POST['mdp'] = "";
    }
?>

<h1>Connexion</h1>

<form method="post">
    <label for="pseudo">Pseudo :</label>
    <br>
    <input type="text" id="pseudo" name="pseudo" required autocomplete="off"><br><br>

    <label for="mdp">Mot de Passe :</label>
    <br>
    <input type="password" id="mdp" name="mdp" required autocomplete="off"><br><br>

    <input type="submit" name="connexion" value="connexion">
</form>
