<?php
    require 'connect.php';
    var_dump($_POST);

    $requete = $database->prepare("INSERT INTO tweet(tweet_Content, tweet_Tag) VALUES (:formTweet, :formTag)");
    $requete->execute(
        [
            "formTweet" => $_POST["billy"],
            "formTag" => $_POST["tag"]
        ]
    );

    header('Location: index.php')
    

?>