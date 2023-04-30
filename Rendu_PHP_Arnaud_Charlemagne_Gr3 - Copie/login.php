
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poster un tweet</title>
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

     <!-- Mise en collones Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm formulaire">
                <form action="insertion.php" method="POST" class= conxtion>
                    <h2>Inscription :</h2>
                    <h3>Nom</h3>
                    <input type="text" name="Nom">
                    <h3>Pseudonyme</h3>
                    <input type="text" name="Pseudonyme">
                    <h3>Adresse mail</h3>
                    <input type="text" name="addMail">
                    <h3>Mot de passe</h3>
                    <input type="text" name="MotdePasse">
                    <button type="submit" name="submitForm" value="Valider" classe="validation">Valider</button>
                </form>
            </div>
            <div class="col-sm regles">
                <h2> Règles de conduite :</h2>
                <ul> 
                    <li>- Pas de pseudos vides.</li>
                    <li>- Aucun pseudos inapproprié.</li>
                    <li>- Pas de pseudos sexuellement explicites.</li>
                    <li>- Pas de pseudos offensants.</li>
                    <li>- Pas de pseudos avec Unicode inhabituel ou illisible.</li>
                    <li>- Les modérateurs se réservent le droit de changer les pseudos.</li>
                    <li>- Les modérateurs se réservent le droit d'utiliser leur propre discrétion quelle que soit la règle.</li>
                    <li>- Pas de failles d'exploitation dans les règles (veuillez les signaler).</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="JS/sidenav.js"></script>
</body>
</html>