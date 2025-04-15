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
    <script src="js/modules/about.js" type="module"></script>
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
                <li><a href="about.html">A propos</a></li>
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

    <section id="activity">
        <h2>nos Activités</h2>
        <div id="school-activity"  >
            <article class="our-act" id="atom">
                <svg width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                    <use href="assets/sprites.svg#atom"></use>
                </svg>
                <h2>Titre</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
            </article>

            <article class="our-act" id="game" >
                <svg width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                    <use href="assets/sprites.svg#game"></use>
                </svg>
                <h2>Titre</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
            </article>
            <article class="our-act" id="plane">
                <svg width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                    <use href="assets/sprites.svg#plane"></use>
                </svg>
                <h2>Titre</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
            </article>
            <article class="our-act" id="swim">
                <svg width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                    <use href="assets/sprites.svg#swim"></use>
                </svg>
                <h2>Titre</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
            </article>
            <article class="our-act" id="walk">
                <svg width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                    <use href="assets/sprites.svg#walk"></use>
                </svg>
                <h2>Titre</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
            </article>
            <article class="our-act" id="swim2">
                <svg width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                    <use href="assets/sprites.svg#swim"></use>
                </svg>
                <h2>Titre</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
            </article>
        </div>
        <article id="our-part">
            <figure>
                <img src="assets/partenaire/image1.png" alt="logo d'un partenaire">
                <figcaption>
                    <h2>Partenaires-Wead</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/partenaire/image2.png" alt="logo d'un partenaire">
                <figcaption>
                    <h2>Partenaires-Wead</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/partenaire/image3.png" alt="logo d'un partenaire">
                <figcaption>
                    <h2>Partenaires-Wead</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/partenaire/image4.png" alt="logo d'un partenaire">
                <figcaption>
                    <h2>Partenaires-Wead</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/partenaire/image5.png" alt="logo d'un partenaire">
                <figcaption>
                    <h2>Partenaires-Wead</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/partenaire/image6.png" alt="logo d'un partenaire">
                <figcaption>
                    <h2>Partenaires-Wead</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </figcaption>
            </figure>
        </article>
    </section>
    <section id="localisation">
        <h2>Notre Localisation</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1180.3638968604653!2d1.41786956102765!3d43.5928610896005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb096cd919bb%3A0xf67e848219a8fcbf!2zQXLDqG5lcw!5e0!3m2!1sen!2sfr!4v1742394580402!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>
<footer>
    <div id="footer-main">
        <nav>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="about.html">A propos</a></li>
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