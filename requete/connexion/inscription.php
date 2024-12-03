<?php 


    include("requete/connexion/verification_user.php");

    if ($userExiste == false){

        $sql = "INSERT INTO utilisateurs(pseudo, mdp)
                VALUES (:pseudo,:mdp)";

        $query = $pdo->prepare($sql);
        $query->execute(
            array(
                ":pseudo" => $_POST['pseudo'],
                ":mdp" => $_POST['mdp']
            )
        );
        $_SESSION['estConnecte'] = true;
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header("Location: profil");
    } else if($_POST['pseudo'] != ""){
        echo "Erreur";
    }
?>