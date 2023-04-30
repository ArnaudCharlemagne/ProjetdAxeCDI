<?php
    require 'connect.php';
    /* require 'poster_tweet.php' ; */

    /* pour recup les données */
    $requete = $database->prepare("SELECT * FROM tweet ORDER BY tweet_Date DESC" );
    $requete->execute();

    /* On recup tout sous tableau php */
    $infos = $requete->fetchAll( PDO::FETCH_ASSOC);

    /* pour recup les données */
    $requete = $database->prepare("SELECT * FROM user");
    $requete->execute();

    /* On recup tout sous tableau php */
    $userinfos = $requete->fetchAll( PDO::FETCH_ASSOC);

    if(isset($_GET["formResearch"])){
        $recherche = $_GET["recherche"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class= hautdepage>
        <button class="btnmenu" onclick="openNav()"><img src= "./images/menu.svg"></button>
                
        
         <!-- Barre de recherche Bootstrap -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>  
    </div>
     <!-- Menu/sidebar -->
    <div id="MySidenav" class="sidemenu">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Accueil</a>
        <a href="login.php">Se connecter</a>
    </div>


    <!-- Tweets -->
   <div class="page">
        <div class="zone_post">
            <h2>Tweets récents :</h2>
            <?php foreach($infos as $tweet) { ?>
                <div class="container-feed">
                    <p> <?php echo $tweet['tweet_Content'] ?> </p>
                    <div class= "infotweet">
                        <p classe= "tagtweet"> <?php echo $tweet['tweet_Tag'] ?> </p>
                        <p class= "datetweet"> <?php echo $tweet['tweet_Date'] ?> </p>
                    
                        <!-- Form pour supprimer -->
                        <button class="supprsuppr" onclick="showPopup()"><img src= "./images/trash.svg"></button>

                        <div id="autrepopup" style="display: none;">
                            <h2>Voulez-vous supprimer votre tweet ?</h2>
                            <div class= "boutbout">
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name='supprimer' value="<?php echo $tweet['tweet_ID']; ?>">
                                    <button type="submit" class= "gosupprimer">Oui</button>
                                </form>
                            
                                <button class="babouin" onclick="hidePopup()" >Non</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
         <!-- Données de compte client, obtenus sur le menu pour se connecter -->
        <div class="account">
            <h2>informations de compte :</h2>
            <div class="infouser">
                <?php
                    foreach($userinfos as $fiche){
                        echo
                    "<p>
                        Nom : ",$fiche['user_Nom']," 
                    </p>
                    <p> 
                        Pseudo : ",$fiche['user_Pseudo'],"
                    </p>
                    <p> 
                         Mail : ",$fiche['user_Mail'],"
                    </p>
                    <p> 
                        Mot de passe : ",$fiche['user_mdp'],"
                    </p>
                    <p> 
                        Photo : ",$fiche['user_Photo'],"
                    </p>";
                    }
                ?>
            </div>
        </div>
    </div>
    
         <!-- écrire un nouveau tweet -->
        <button class="popup-btn" onclick="openPopup()">Tweeter</button>
        <div class="postweet" id="postertweet">
            <h2> Ecrivez votre tweet ici :</h2>
            <form action="insert.php" method="POST">
                <input type="text" name="billy">
                <select class="tag" name="tag" id="tag-list">
                    <option value="Choisir un tag">Choisir un tag</option>
                    <option value="#Sport">#Sport</option>
                    <option value="#JeuxVidéo">#Jeux Vidéo</option>
                    <option value="#Musique">#Musique</option>
                    <option value="#Voyage">#Voyage</option>
                    <option value="#Politique">#Politique</option>
                    <option value="#Argent">#Argent</option>
                    <option value="#Add">#Add</option>
                </select>
                <button type="submit" onclick="closePopup()">Partager</button>
                <button type="button" onclick="closePopup()">Fermer</button>
            </form>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="JS/sidenav.js"></script>
    <script src="JS/boutontweet.js"></script>
    <script src="JS/poubelle.js"></script>
</body>
</html>