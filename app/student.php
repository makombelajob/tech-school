<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: login.php');
    exit;
}
include_once 'includes/header.php';
?>
<main>
    <section id="students_infos">
        <form action="logout.php">
            <button class="btn btn-secondary" type="submit">Logout</button>
        </form>

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
