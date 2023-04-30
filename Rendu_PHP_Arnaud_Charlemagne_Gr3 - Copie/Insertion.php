<?php 
require 'connect.php';

$requete = $database->prepare("INSERT INTO user(user_Nom, user_Pseudo, user_Mail, user_mdp) VALUES (:UserName, :UserPseudo, :UserMail, :UserMDP)");
    $requete->execute(
        [
            "UserName" => $_POST["Nom"],
            "UserPseudo" => $_POST["Pseudonyme"],
            "UserMail" => $_POST["addMail"],
            "UserMDP" => $_POST["MotdePasse"]
        ]
    );

    header('Location: index.php')

?>