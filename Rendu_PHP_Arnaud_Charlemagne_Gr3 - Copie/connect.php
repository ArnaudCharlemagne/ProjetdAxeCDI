<?php
    // contient de quoi se co à la base de donnée

    try {
        $database = new PDO(
        "mysql:host=localhost; dbname=birdsound",
        "root", // identifiant
        ""); // MDP
    }

    catch(PDOException $error) {
        die($error);
    } 
