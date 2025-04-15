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
    <script src="js/script.js" defer></script>
    <title>tech-school</title>
</head>
<body>
<header>
    <nav>
        <a href="index.php">
            <img src="assets/Logo.png" alt="Logo du site">
        </a>
        <div class="open">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="about.php">A propos</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
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
    <section id="students_infos">
        <h1>BIENVENU "STUDENTS NAME"</h1>
        <article class="infos_general">
            <h2>Informations générales</h2>
            <p>Prochaines vacances du 05 mai au 15 mai</p>
        </article>
        <article class="infos_students">
            <h2>Nom : <span>Students</span></h2>
            <h2>Prénom : <span>Students</span></h2>
            <h3>Class: 1ère</h3>
            <h4>Identifiants</h4>
        </article>
        <article class="points">
            <h2>Cours 1 <span>10/20</span></h2>
            <h2>Cours 2 <span>10/20</span></h2>
            <h2>Cours 3 <span>10/20</span></h2>
            <h2>Cours 4 <span>10/20</span></h2>
        </article>
        <article class="remarques">
            <p>Les remarques administratives</p>
        </article>
    </section>
    <section id="courses_details">
        <article class="courseOne">
            <h2>Cours_1 : <span>11/20</span></h2>
            <aside>
                <h3>Remarques</h3>
                <p>Tu dois t'améliorer sur partie 2 du cours.</p>
                <p>L'erreur 3 et 5 vient du fait que tu as à la base utiliser une mauvaise formule </p>
            </aside>
        </article>
        <article class="courseOne">
            <h2>Cours_2 : <span>11/20</span></h2>
            <aside>
                <h3>Remarques</h3>
                <p>Tu dois t'améliorer sur partie 2 du cours.</p>
                <p>L'erreur 3 et 5 vient du fait que tu as à la base utiliser une mauvaise formule </p>
            </aside>
        </article>
        <article class="courseOne">
            <h2>Cours_3 : <span>11/20</span></h2>
            <aside>
                <h3>Remarques</h3>
                <p>Tu dois t'améliorer sur partie 2 du cours.</p>
                <p>L'erreur 3 et 5 vient du fait que tu as à la base utiliser une mauvaise formule </p>
            </aside>
        </article>
        <article class="courseOne">
            <h2>Cours_4 : <span>11/20</span></h2>
            <aside>
                <h3>Remarques</h3>
                <p>Tu dois t'améliorer sur partie 2 du cours.</p>
                <p>L'erreur 3 et 5 vient du fait que tu as à la base utiliser une mauvaise formule </p>
            </aside>
        </article>
    </section>
    <section id="students_contact">
        <h2>Contactez la secrétaire</h2>
        <form action="">
            <div class="sujet">
                <label for="sujet">Sujet</label>
                <select name="sujet" id="sujet">
                    <option value="">*** choisir un sujet ***</option>
                    <option value="courses">Cours</option>
                    <option value="admin">Administration</option>
                </select>
            </div>
            <div class="message">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <div class="btnSubmit">
                <button type="submit" disabled>Envoyer</button>
            </div>
        </form>
    </section>
</main>
<footer>
    <div id="footer-main">
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="about.php">A propos</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
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