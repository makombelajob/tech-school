<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link id="style" rel="stylesheet" href="css/style.css">
    <script src="js/modules/signup.js" type="module"></script>
    <title>tech-school</title>
</head>
<body>
<header>
    <nav>
        <a href="index.html">
            <img src="assets/Logo.png" alt="Logo du site">
        </a>
        <div class="open">
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="about.php">A propos</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.html">Signup</a></li>
                <li><a href="#contact">Contacter</a></li>
            </ul>
            <svg id="close" width="20" height="20" xmlns:xlink="http://www.w3.org/2000/svg" fill="white">
                <use href="assets/sprites.svg#closeBurger"></use>
            </svg>
        </div>
        <svg id="theme-switch" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="#e4e453">
            <use href="assets/sprites.svg#light"></use>
        </svg>
        <svg id="burger" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
            <use href="assets/sprites.svg#burger"></use>
        </svg>
    </nav>
</header>
<main>
    <section id="signup">
        <h1>Inscription</h1>

        <form action="" id="formSignup">
            <div class="image">
                <img src="assets/Logo.png" alt="Logo du site">
            </div>
            <div id="nameField">
                <label for="name">Nom</label>
                <div class="input-group">
                    <input type="text" id="name" placeholder="Entrez votre nom">
                    <svg class="valid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg">
                        <use href="assets/sprites.svg#valid" ></use>
                    </svg>
                    <svg class="invalid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                        <use href="assets/sprites.svg#invalid"></use>
                    </svg>
                </div>
                <div class="feedback">
                    Le nom doit être conténir plus de 5 caractères
                </div>
            </div>
            <div id="lastNameField">
                <label for="lastName">Prénom</label>
                <div class="input-group">
                    <input type="text" id="lastName" placeholder="Entrez votre prénom">
                    <svg class="valid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                        <use href="assets/sprites.svg#valid"></use>
                    </svg>
                    <svg class="invalid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                        <use href="assets/sprites.svg#invalid"></use>
                    </svg>
                </div>
                <div class="feedback">
                    Le prénom doit être conténir plus de 5 caractères
                </div>
            </div>
            <div id="emailField">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="text" id="email" placeholder="Entrez votre email">
                    <svg class="valid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                        <use href="assets/sprites.svg#valid"></use>
                    </svg>
                    <svg class="invalid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                        <use href="assets/sprites.svg#invalid"></use>
                    </svg>
                </div>
                <div class="feedback">
                    L'email doit être valide'
                </div>
            </div>
            <div id="pwdField">
                <label for="passwd">Mot de passe</label>
                <div class="input-group">
                    <input type="password" id="passwd" placeholder="Entrez votre Mot de pass">
                    <svg class="valid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                        <use href="assets/sprites.svg#valid"></use>
                    </svg>
                    <svg class="invalid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                        <use href="assets/sprites.svg#invalid"></use>
                    </svg>
                </div>
                <div class="feedback">
                    Le mot de passe doit être valide
                </div>
            </div>
            <div id="pwdConfirmField">
                <label for="passwdConfirm">confirmer le mot de passe</label>
                <div class="input-group">
                    <input type="password" id="passwdConfirm" placeholder="Entrez votre Mot de pass">
                    <svg class="valid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                        <use href="assets/sprites.svg#valid"></use>
                    </svg>
                    <svg class="invalid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                        <use href="assets/sprites.svg#invalid"></use>
                    </svg>
                </div>
                <div class="feedback">
                    Le devez réécrire le même mot de passe
                </div>
            </div>
            <div id="dbsField">
                <label for="dbs">Catégorie</label>
                <div class="input-group">
                    <select name="dbs" id="dbs">
                        <option value="">===catégorie===</option>
                        <option value="students">élèves</option>
                        <option value="teachers">enseignants</option>
                    </select>
                    <svg class="valid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                        <use href="assets/sprites.svg#valid"></use>
                    </svg>
                    <svg class="invalid" width="30" height="30" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                        <use href="assets/sprites.svg#invalid"></use>
                    </svg>
                </div>
                <div class="feedback">
                    Le sujet ne doit pas être vide (5 caractères minimum)
                </div>
            </div>
            <div id="rgpdField">
                <input type="checkbox" id="rgpd"/>
                <label for="rgpd">J'acceptes les conditions d'utilisations</label>
                <div class="feedback">
                    Vous devez cocher cette case !
                </div>
            </div>
            <div id="btnSubmit">
                <button id="submit" type="submit" class="btn" disabled>Envoyer</button>
            </div>
        </form>
    </section>
</main>
<footer>
    <div id="footer-main">
        <nav>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="about.php">A propos</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.html">Signup</a></li>
                <li><a href="#contact">Contacter</a></li>
            </ul>
        </nav>
        <div id="foot-content">
            <p>Ceci est un travail de fin de formation Développement Web et
                web mobile suivis pendant une période de 6 mois</p>
            <p>Technologie utilisée Htlm&Css, Javascript, Php&Mysql...</p>
        </div>
    </div>
    <div id="footer-foot">
        <p>&copy; Tout droits réservés</p>
    </div>
</footer>
</body>
</html>