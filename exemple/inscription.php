<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <title>Connexion</title>
</head>

<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Home</a></li>
            <li class="menu"><a href="profil.php">Page profil</a></li>
            <li class="imageMenu"><a href="index.php"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="profil.php"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
        </ul>
    </header>
    <main>
        <form>
            <fieldset>
                <legend>Se connecter</legend>
                <div>
                    <label name="nom">Nom</label>
                    <input type="text" name="lastName" id="lN" required>
                </div>
                <div>
                    <label name="nom">Prénom</label>
                    <input type="text" name="firstName" id="fN" required>
                </div>
                <div>
                    <label name="adresse">Adresse mail</label>
                    <input type="email" id="email" pattern="+@" required>
                </div>
                <div>
                    <label name="nom">Nom d'utilisateur</label>
                    <input type="text" name="userName" id="uN" required>
                </div>
                <div>
                    <label name="mot de passe">Mot de passe</label>
                    <input type="password" name="motpass" id="pwd" required>
                </div>
                <div class="submit">
                    <input type="submit" value="S'inscrire">
                </div>
                <a href="connexion.php">J'ai déjà un compte</a>
            </fieldset>
        </form>
    </main>
    <footer>
        <div class="flex space-between align-item-center">
            <p><a href="https://www.christinesurges.be/" target="_blank" title="Aller à l'agence">Voir l'agence</a></p>
            <div>
                <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
                <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
                <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>