<?php require_once 'includes/header.php';
// Verification of the method
$errorsInput = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // Checking all input
    $email = $_POST['email'] ?? '';
    $sujet = htmlspecialchars(trim($_POST['sujet'])) ?? '';
    $message = htmlspecialchars(trim($_POST['message'])) ?? '';

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorsInput['email'] = 'L\'email doit être valide';
    }
    if(empty($sujet) || strlen($sujet) < 5){
        $errorsInput['sujet'] = 'Le sujet doit être valide !';
    }
    if(empty($message) || strlen($message) > 30){
        $errorsInput['message'] = 'Le message n\'est pas valide ! ';
    }

}
?>
    <main class="container">
        <section class="row" id="hero">
            <h1>Tech-School</h1>
            <div class="">
                <article class="slide">
                    <div class="elements">
                        <figure class="element active">
                            <img src="assets/Slide/pixlr-image-generator-0436f8d9-4481-4bf6-aec0-ddbed88917a7.png" alt="Image du slide">
                            <figcaption class="caption">
                                <h2>tech-School</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </figcaption>
                        </figure>
                        <figure class="element">
                            <img src="assets/Slide/pixlr-image-generator-c62676bf-e07b-463c-912f-f5da2115b396.png" alt="image du slide">
                            <figcaption class="caption">
                                <h2>tech-School</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </figcaption>
                        </figure>
                        <figure class="element">
                            <img src="assets/Slide/pixlr-image-generator-f34d016c-c9d2-4688-a45b-b00be01b0c32.png" alt="Image du slide">
                            <figcaption class="caption">
                                <h2>tech-School</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <svg id="left" width="50" height="50">
                        <use href="assets/sprites.svg#left"></use>
                    </svg>
                    <svg id="right" width="50" height="50" xmlns:xlink="http://www.w3.org/2000/svg" >
                        <use href="assets/sprites.svg#right"></use>
                    </svg>
                </article>
            </div>
        </section>
        <section id="card" class="row justify-content-between">
            <h2 class="text-center my-4 fs-1">A propos de nous</h2>
            <article class="col-md-5 card mb-3">
                <img class="card-image" src="assets/real/pixlr-image-generator-0436f8d9-4481-4bf6-aec0-ddbed88917.png" alt="Image des écoliers">
                <div class="card-body">
                    <h2 class="card-title fs-1">Titre</h2>
                    <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                    <div class="text-center my-2">
                        <a class=" fs-3 btn btn-primary" href="#">Savoir plus</a>
                    </div>
                </div>
            </article>
            <article class="col-md-5 card mb-3">
                <img class="card-image" src="assets/real/pixlr-image-generator-0436f8d9-4481-4bf6-aec0-ddbed88916.png" alt="Image des écoliers">
                <div class="card-body">
                    <h2 class="card-title fs-1">Titre</h2>
                    <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                    <div class="text-center my-2">
                        <a class=" fs-3 btn btn-primary" href="#">Savoir plus</a>
                    </div>
                </div>
            </article>
            <article class="col-md-5 card mb-3">
                <img class="card-image" src="assets/real/pixlr-image-generator-0436f8d9-4481-4bf6-aec0-ddbed88913.png" alt="Image des écoliers">
                <div class="card-body">
                    <h2 class="card-title fs-1">Titre</h2>
                    <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                    <div class="text-center my-2">
                        <a class=" fs-3 btn btn-primary" href="#">Savoir plus</a>
                    </div>
                </div>
            </article>
            <article class="col-md-5 card mb-3">
                <img class="card-image" src="assets/real/pixlr-image-generator-0436f8d9-4481-4bf6-aec0-ddbed88916.png" alt="Image des écoliers">
                <div class="card-body">
                    <h2 class="card-title fs-1">Titre</h2>
                    <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                    <div class="text-center my-2">
                        <a class=" fs-3 btn btn-primary" href="#">Savoir plus</a>
                    </div>
                </div>
            </article>
        </section>
        <section class="row" id="activity">
            <h2>Nos activités</h2>
            <div class="col-md-12" id="school-activity"  >
                <div class="row justify-content-between">
                    <article class="col-md-3 card mb-3 text-center" id="atom">
                        <div>
                            <svg class="py-3" width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                                <use href="assets/sprites.svg#atom"></use>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                        </div>
                    </article>

                    <article class="col-md-3 card mb-3 text-center" id="game" >
                        <div>
                            <svg class="py-3" width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                                <use href="assets/sprites.svg#game"></use>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                        </div>
                    </article>

                    <article class="col-md-3 card mb-3 text-center" id="plane">
                        <div>
                            <svg class="py-3" width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                                <use href="assets/sprites.svg#plane"></use>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                        </div>
                    </article>
                </div>
                <div class="row justify-content-between">
                    <article class="col-md-3 card mb-3 text-center" id="swim">
                        <div>
                            <svg class="py-3" width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                                <use href="assets/sprites.svg#swim"></use>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                        </div>
                    </article>
                    <article class="col-md-3 card mb-3 text-center" id="walk">
                        <div>
                            <svg class="py-3" width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                                <use href="assets/sprites.svg#walk"></use>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="card-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                        </div>
                    </article>
                    <article class="col-md-3 card mb-3 text-center" id="swim2">
                        <div>
                            <svg class="py-3" width="100" height="100" xmlns:xlink="http://www.w3.org/2000/svg" fill="">
                                <use href="assets/sprites.svg#swim"></use>
                            </svg>
                        </div>
                        <div class="car-body">
                            <h2 class="card-title fs-1">Titre</h2>
                            <p class="car-text fs-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section id="partenaire" class="row text-center">
            <div class="col-12 my-3">
                <h2>Nos parténaires</h2>
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
            <div class="col-12">
                <h2>Notre équipe</h2>
            </div>
            <div class="col-12">
               <div class="row ms-4 justify-content-between">
                   <article class="col-12 col-md-6 col-lg-3">
                       <figure class="row">
                           <img class="col-6 col-md" src="assets/equip/professor_chemistry.jpg" alt="Image du professeur de chimie">
                           <figcaption class="col-6 m-auto">
                               <h3>Professeur de chimie</h3>
                               <h4>Esther Clair</h4>
                           </figcaption>
                       </figure>
                   </article>
                   <article class="col-12 col-md-6 col-lg-3">
                       <figure class="row">
                           <img class="col-6 col-md" src="assets/equip/professor_math.jpg" alt="L'image du professeur de Math">
                           <figcaption class="col-6 m-auto">
                               <h3>Professeur de Math</h3>
                               <h4>Pauline Marie</h4>
                           </figcaption>
                       </figure>
                   </article>
                   <article class="col-12 col-md-6 col-lg-3">
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
            <div class="col-12">
                <h2>Notre Localisation</h2>
            </div>
            <div class="col">
                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1180.3638968604653!2d1.41786956102765!3d43.5928610896005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb096cd919bb%3A0xf67e848219a8fcbf!2zQXLDqG5lcw!5e0!3m2!1sen!2sfr!4v1742394580402!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section id="contact" class="row">
            <div class="col-12">
                <h2>Nous contacter</h2>
            </div>
            <form action="" method="post" id="formContact" class="col-12 col-md-10 m-auto">
                <div class="image">
                    <img src="assets/Logo.png" alt="Logo du site">
                </div>
                <div class="mb-3 position-relative" >
                    <label class="form-label fs-1 my-3" for="validationTooltip01">Email</label>
                    <input class="form-control fs-1" type="text" id="validationTooltip01" placeholder="Entrez votre email" name="email">
                    <div class="invalid-tooltip">
                        L'email doit être valide
                    </div>
                </div>
                <div id="sujetField">
                    <label class="label-form fs-1 my-3" for="validationTooltip02">Sujet</label>
                    <input class="form-control fs-1" type="text" id="validationTooltip02" placeholder="Entrez votre sujet" name="subject">
                    <div class="invalid-tooltip">
                        Le sujet ne doit pas être vide (5 caractères minimum)
                    </div>
                </div>
                <div id="msgField">
                    <label class="label-form fs-1 my-3" for="validationTooltip03">Message</label>
                    <textarea class="form-control fs-1" name="message" id="validationTooltip03" cols="20" rows="10"></textarea>
                    <div class="valid-tooltip">
                        Le message peut être envoyer
                    </div>
                </div>
                <div class="btn-group">
                    <input name="rgpd" class="me-3" type="checkbox" id="validationFormCheck1"/>
                    <label class="label-form fs-1 my-3" for="validationFormCheck1">J'acceptes les conditions rgpd</label>
                    <div class="invalid-tooltip">
                        Vous devez cocher cette case !
                    </div>
                </div>
                <div class="text-center" id="btnSubmit">
                    <button id="submit" type="submit" class="btn btn-primary fs-1">Envoyer</button>
                </div>
            </form>
        </section>
    </main>
<?php require_once 'includes/footer.php'; ?>