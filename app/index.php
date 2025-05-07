<?php
session_start();
include_once 'includes/header.php';
// Verification of the method
?>
    <main class="container">
        <section class="row" id="hero">
            <div class="my-3">
                <h1 class="text-center text-uppercase fw-bolder m-3 text-primary">Tech-School</h1>
            </div>
            <div class="carousel slide">
                <div id="carousel" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="element active position-relative">
                                <img class="d-block w-100"
                                     src="assets/Slide/pixlr-image-generator-0436f8d9-4481-4bf6-aec0-ddbed88917a7.png"
                                     alt="Image du slide" role="img" aria-label="Placeholder: First slide"
                                     preserveAspectRatio="xMidYMid slice">
                                <figcaption
                                        class="carousel-caption top-50 start-50 translate-middle d-flex  align-items-center justify-content-center">
                                    <div class="alert alert-primary">
                                        <h2 class="text-black fs-3 m-0 p-0 text-uppercase fw-semibold">tech-School</h2>
                                        <p class="text-black fs-3 m-0 p-0">Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="element active position-relative">
                                <img class="d-block w-100"
                                     src="assets/Slide/pixlr-image-generator-c62676bf-e07b-463c-912f-f5da2115b396.png"
                                     alt="Image du slide" role="img" aria-label="Placeholder: First slide"
                                     preserveAspectRatio="xMidYMid slice">
                                <figcaption
                                        class="carousel-caption top-50 start-50 translate-middle d-flex  align-items-center justify-content-center">
                                    <div class="alert alert-primary">
                                        <h2 class="text-black fs-3 m-0 p-0 text-uppercase fw-semibold">tech-School</h2>
                                        <p class="text-black fs-3 m-0 p-0">Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="element active position-relative">
                                <img class="d-block w-100"
                                     src="assets/Slide/pixlr-image-generator-f34d016c-c9d2-4688-a45b-b00be01b0c32.png"
                                     alt="Image du slide" role="img" aria-label="Placeholder: First slide"
                                     preserveAspectRatio="xMidYMid slice">
                                <figcaption
                                        class="carousel-caption top-50 start-50 translate-middle d-flex  align-items-center justify-content-center">
                                    <div class="alert alert-primary">
                                        <h2 class="text-black fs-3 m-0 p-0 text-uppercase fw-semibold">tech-School</h2>
                                        <p class="text-black fs-3 m-0 p-0">Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev"
                            id="left">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next"
                            id="right">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <section id="card" class="row justify-content-between">
            <div class=" my-3">
                <h2 class="fs-1 text-center text-uppercase my-3 text-primary">A propos de nous</h2>
            </div>
            <article class="col-md-5 card mb-3">
                <img class="card-image" src="assets/real/pixlr-image-generator-0436f8d9-4481-4bf6-aec0-ddbed88917.png"
                     alt="Image des écoliers">
                <div class="card-body">
                    <h2 class="card-title fs-1">Titre</h2>
                    <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                    <div class="text-center my-2">
                        <a class=" fs-3 btn btn-primary" href="about.php">Savoir plus</a>
                    </div>
                </div>
            </article>
            <article class="col-md-5 card mb-3">
                <img class="card-image" src="assets/real/pixlr-image-generator-0436f8d9-4481-4bf6-aec0-ddbed88916.png"
                     alt="Image des écoliers">
                <div class="card-body">
                    <h2 class="card-title fs-1">Titre</h2>
                    <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                    <div class="text-center my-2">
                        <a class=" fs-3 btn btn-primary" href="about.php">Savoir plus</a>
                    </div>
                </div>
            </article>
            <article class="col-md-5 card mb-3">
                <img class="card-image" src="assets/real/pixlr-image-generator-0436f8d9-4481-4bf6-aec0-ddbed88913.png"
                     alt="Image des écoliers">
                <div class="card-body">
                    <h2 class="card-title fs-1">Titre</h2>
                    <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                    <div class="text-center my-2">
                        <a class=" fs-3 btn btn-primary" href="about.php">Savoir plus</a>
                    </div>
                </div>
            </article>
            <article class="col-md-5 card mb-3">
                <img class="card-image" src="assets/real/pixlr-image-generator-0436f8d9-4481-4bf6-aec0-ddbed88916.png"
                     alt="Image des écoliers">
                <div class="card-body">
                    <h2 class="card-title fs-1">Titre</h2>
                    <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                    <div class="text-center my-2">
                        <a class=" fs-3 btn btn-primary" href="about.php">Savoir plus</a>
                    </div>
                </div>
            </article>
        </section>
        <section class="row" id="activity">
            <div class="text-center my-3">
                <h2 class="fs-1 text-uppercase my-3 text-primary">Nos activités</h2>
            </div>
            <div class="col-md-12" id="school-activity">
                <div class="row justify-content-between">
                    <article class="col-md-3 alert alert-primary mb-3 text-center" id="atom">
                        <div>
                            <svg class="py-3" width="100" height="100" fill="">
                                <use href="assets/sprites.svg#atom"></use>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit,
                                nemo.</p>
                        </div>
                    </article>

                    <article class="col-md-3 alert alert-danger mb-3 text-center" id="game">
                        <div>
                            <svg class="py-3" width="100" height="100"
                                 stroke="white">
                                <use href="assets/sprites.svg#game"></use>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit,
                                nemo.</p>
                        </div>
                    </article>

                    <article class="col-md-3 alert alert-info mb-3 text-center" id="plane">
                        <div>
                            <svg class="py-3" width="100" height="100">
                                <use href="assets/sprites.svg#plane"></use>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit,
                                nemo.</p>
                        </div>
                    </article>
                </div>
                <div class="row justify-content-between">
                    <article class="col-md-3 alert  alert-secondary mb-3 text-center" id="swim">
                        <div>
                            <svg class="py-3" width="100" height="100" fill="">
                                <use href="assets/sprites.svg#swim"></use>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit,
                                nemo.</p>
                        </div>
                    </article>
                    <article class="col-md-3 alert alert-success mb-3 text-center" id="walk">
                        <div>
                            <svg class="py-3" width="100" height="100" fill="">
                                <use href="assets/sprites.svg#walk"></use>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit,
                                nemo.</p>
                        </div>
                    </article>
                    <article class="col-md-3 alert alert-dark mb-3 text-center" id="swim2">
                        <div>
                            <svg class="py-3" width="100" height="100" fill="">
                                <use href="assets/sprites.svg#swim"></use>
                            </svg>
                        </div>
                        <div class="car-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="car-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit,
                                nemo.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section id="partenaire" class="row text-center">
            <div class="col-12 my-3">
                <h2 class="fs-1 text-uppercase my-3 text-primary">Nos parténaires</h2>
            </div>
            <article class="col-md-4 m-auto">
                <figure class="">
                    <img class="" src="assets/partenaire/image1.png" alt="logo d'un partenaire">
                    <figcaption class="">
                        <h3>Partenaires-Wead</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-md-4 my-3">
                <figure class="">
                    <img class="" src="assets/partenaire/image2.png" alt="logo d'un partenaire">
                    <figcaption class="">
                        <h3>Partenaires-Wead</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-md-4 my-3">
                <figure class="">
                    <img class="" src="assets/partenaire/image3.png" alt="logo d'un partenaire">
                    <figcaption class="">
                        <h3>Partenaires-Wead</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-md-4 my-3">
                <figure class="">
                    <img class="" src="assets/partenaire/image4.png" alt="logo d'un partenaire">
                    <figcaption class="">
                        <h3>Partenaires-Wead</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-md-4 my-3">
                <figure class="">
                    <img class="" src="assets/partenaire/image5.png" alt="logo d'un partenaire">
                    <figcaption class="">
                        <h3>Partenaires-Wead</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-md-4 my-3">
                <figure class="">
                    <img class="" src="assets/partenaire/image6.png" alt="logo d'un partenaire">
                    <figcaption class="">
                        <h3>Partenaires-Wead</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </figcaption>
                </figure>
            </article>
        </section>
        <section id="equip" class="row">
            <div class="col-12 text-center">
                <h2 class="fs-1 text-uppercase my-3 text-primary">Notre équipe</h2>
            </div>
            <div class="col-12">
                <div class="row ms-4 justify-content-between m-auto">
                    <article class="col-12 col-md-5 col-lg-3 alert alert-info m-auto mb-2">
                        <figure class="row">
                            <img class="col-6 col-md" src="assets/equip/professor_chemistry.jpg"
                                 alt="Image du professeur de chimie">
                            <figcaption class="col-6 m-auto">
                                <h3>Professeur de chimie</h3>
                                <h4>Esther Clair</h4>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="col-12 col-md-5 col-lg-3 alert alert-success m-auto mb-2">
                        <figure class="row">
                            <img class="col-6 col-md" src="assets/equip/professor_math.jpg"
                                 alt="L'image du professeur de Math">
                            <figcaption class="col-6 m-auto">
                                <h3>Professeur de Math</h3>
                                <h4>Pauline Marie</h4>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="col-12 col-md-5 col-lg-3 alert alert-primary m-auto mb-2">
                        <figure class="row">
                            <img class="col-6 col-md" src="assets/equip/director.jpg" alt="L'image du directeur">
                            <figcaption class="col-6 m-auto">
                                <h3 class="">Directeur</h3>
                                <h4>Patrick Erick</h4>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </section>
        <section id="localisation" class="row">
            <div class="col-12 text-center my-3">
                <h2 class="fs-1 text-uppercase my-3 text-primary">Notre Localisation</h2>
            </div>
            <div class="col">
                <iframe class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1180.3638968604653!2d1.41786956102765!3d43.5928610896005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb096cd919bb%3A0xf67e848219a8fcbf!2zQXLDqG5lcw!5e0!3m2!1sen!2sfr!4v1742394580402!5m2!1sen!2sfr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section id="contact" class="row">
            <div class="col-12 text-center my-3">
                <h2 class="fs-1 text-uppercase my-3 text-primary">Nous contacter</h2>
            </div>
            <div class="col-12 col-md-10 m-auto">
                <?php include_once 'includes/flash_message.php'; ?>
            </div>
            <div class="col-12 col-md-10 m-auto">
                <?php include_once 'includes/flash_errors.php'; ?>
            </div>
            <form action="contact_treatment.php" method="post" id="formContact"
                  class="col-12 col-md-10 m-auto alert alert-primary rounded-5">
                <div class="image">
                    <img src="assets/Logo.png" alt="Logo du site">
                </div>
                <div class="mb-3 position-relative">
                    <label class="form-label fs-1 my-3" for="validationTooltip01">Email</label>
                    <input class="form-control fs-1" type="text" id="validationTooltip01"
                           placeholder="Entrez votre email" name="email"
                           value="<?= $_SESSION['data']['email'] ?? ''; ?>">
                    <div class="invalid-tooltip">
                        L'email doit être valide
                    </div>
                </div>
                <div id="sujetField">
                    <label class="label-form fs-1 my-3" for="validationTooltip02">Sujet</label>
                    <input class="form-control fs-1" type="text" id="validationTooltip02"
                           placeholder="Entrez votre sujet" name="subject"
                           value="<?= $_SESSION['data']['subject'] ?? ''; ?>">
                    <div class="invalid-tooltip">
                        Le sujet ne doit pas être vide (5 caractères minimum)
                    </div>
                </div>
                <div id="msgField">
                    <label class="label-form fs-1 my-3" for="validationTooltip03">Message</label>
                    <textarea class="form-control fs-1" name="message" id="validationTooltip03" cols="20"
                              rows="10"><?= $_SESSION['data']['message'] ?? ''; ?></textarea>
                    <div class="valid-tooltip">
                        Le message peut être envoyer
                    </div>
                </div>
                <div class="btn-group">
                    <input name="gpdr" class="me-3" type="checkbox"
                           id="validationFormCheck1" <?= (!empty($_SESSION['data']['gpdr']) && $_SESSION['data']['gpdr'] === 'on') ? 'checked' : ''; ?>/>
                    <label class="label-form fs-1 my-3" for="validationFormCheck1">J'acceptes les conditions
                        rgpd</label>
                    <div class="invalid-tooltip">
                        Vous devez cocher cette case !
                    </div>
                </div>
                <div class="text-center" id="btnSubmit">
                    <button id="submit" type="submit" class="btn btn-primary fs-1">Envoyer</button>
                </div>
            </form>
        </section>
        <?php include_once 'includes/upButton.php'; ?>
    </main>
<?php unset($_SESSION['message']); ?>
<?php unset($_SESSION['errors']); ?>
<?php unset($_SESSION['data']); ?>
<?php include_once 'includes/footer.php'; ?>