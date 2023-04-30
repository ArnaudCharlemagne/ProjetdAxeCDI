<?php

    require "connect.php";

    $data = [
        'suppForm' => $_POST['supprimer']
    ];

    $supp = $database->prepare('DELETE FROM tweet WHERE tweet_ID = :suppForm');
    $supp->execute($data);

    header('Location: index.php')

?>