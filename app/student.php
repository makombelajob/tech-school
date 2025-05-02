<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: login.php');
    exit;
}
include_once 'includes/header.php';
?>
<main class="container">
    <div class="row">
        <div class="col m-1">
            <form action="logout.php" method="post">
                <button class="btn btn-danger rounded-5 ms-auto" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1z"/>
                        <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812"/>
                    </svg>
                </button>
            </form>
        </div>
        <section class="col-12" id="students_infos">
            <h1>Bienvenu <span class="text-uppercase text-primary"><?= $_SESSION['user']['lastname'] . ' ' . $_SESSION['user']['firstname'];?></span></h1>
            <article class="text-center bg-warning rounded-2">
                <h2>Informations générales</h2>
                <p class="fs-2">Prochaines vacances du 05 mai au 15 mai</p>
            </article>
            <div class="col-12">
                <article class="bg-secondary text-white text-center p-2">
                    <h2>Nom : <span><?= $_SESSION['user']['lastname'];?></span></h2>
                    <h2>Prénom : <span><?= $_SESSION['user']['firstname'];?></span></h2>
                    <h3>Class: 1ère</h3>
                    <h4>Identifiant : <?= $_SESSION['user']['id'];?></h4>
                </article>
                <article class="alert alert-info rounded-5 p-3 my-3">
                    <h2>Cours 1 <span>10/20</span></h2>
                    <h2>Cours 2 <span>10/20</span></h2>
                    <h2>Cours 3 <span>10/20</span></h2>
                    <h2>Cours 4 <span>10/20</span></h2>
                </article>
            </div>
        </section>
        <section class="col-12" id="courses_details">
            <h2 class="text-center text-uppercase fs-1 my-3">Remarques</h2>
            <article class="alert alert-danger p-2">
                <h2 class="">Cours_1 : <span>11/20</span></h2>
                <aside class="">
                    <h3 class="fs-3">Remarques</h3>
                    <p class="fs-3 text-danger">Tu dois t'améliorer sur partie 2 du cours.</p>
                    <p class="fs-3 text-primary">L'erreur 3 et 5 vient du fait que tu as à la base utiliser une mauvaise formule </p>
                </aside>
            </article>
            <article class="alert alert-danger p-2">
                <h2>Cours_2 : <span>11/20</span></h2>
                <aside>
                    <h3 class="fs-3">Remarques</h3>
                    <p class="fs-3 text-danger">Tu dois t'améliorer sur partie 2 du cours.</p>
                    <p class="fs-3 text-primary">L'erreur 3 et 5 vient du fait que tu as à la base utiliser une mauvaise formule </p>
                </aside>
            </article>
            <article class="alert alert-danger p-2">
                <h2>Cours_3 : <span>11/20</span></h2>
                <aside>
                    <h3 class="fs-3">Remarques</h3>
                    <p class="fs-3 text-danger">Tu dois t'améliorer sur partie 2 du cours.</p>
                    <p class="fs-3 text-primary">L'erreur 3 et 5 vient du fait que tu as à la base utiliser une mauvaise formule </p>
                </aside>
            </article>
            <article class="alert alert-danger p-2">
                <h2>Cours_4 : <span>11/20</span></h2>
                <aside>
                    <h3 class="fs-3">Remarques</h3>
                    <p class="fs-3 text-danger">Tu dois t'améliorer sur partie 2 du cours.</p>
                    <p class="fs-3 text-primary">L'erreur 3 et 5 vient du fait que tu as à la base utiliser une mauvaise formule </p>
                </aside>
            </article>
        </section>
        <section class="col-12">
            <h2 class="fs-1 text-center text-uppercase my-3">Contactez la secrétaire</h2>
            <form action="">
                <div class="sujet">
                    <label class="form-label fs-1 my-3" for="sujet">Sujet</label>
                    <select class="form-control fs-2 text-center" name="sujet" id="sujet">
                        <option value="">*** choisir un sujet ***</option>
                        <option value="courses">Cours</option>
                        <option value="admin">Administration</option>
                    </select>
                </div>
                <div class="message">
                    <label class="form-label fs-1 my-3" for="message">Message</label>
                    <textarea class="form-control fs-2" name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="text-center my-3">
                    <button class="btn btn-primary fs-2" type="submit" >Envoyer</button>
                </div>
            </form>
        </section>
    </div>
</main>
<?php include_once 'includes/footer.php'; ?>
