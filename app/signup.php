<?php
session_start();
include_once 'includes/header.php'; ?>
<main class="container" id="signup">
    <div class="row min-vh-100 d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-8">
            <section id="signup">
                <h1 class="fs-1 text-center text-uppercase fw-bolder">Inscription</h1>
                <div>
                    <?php include_once 'includes/flash_message.php'; ?>
                </div>
                <div>
                    <?php include_once 'includes/flash_errors.php'; ?>
                </div>
                <form action="signup_treatment.php" method="post" id="formSignup" class="alert alert-primary rounded-5">
                    <div id="nameField">
                        <label class="form-label fs-2 my-3" for="lastname">Nom</label>
                        <input class="form-control fs-2" type="text" id="lastname" placeholder="Entrez votre nom"
                               name="lastname" value="<?= $_SESSION['data']['lastname'] ?? ''; ?>">
                    </div>
                    <div id="lastNameField">
                        <label class="form-label fs-2 my-3" for="firstname">Prénom</label>
                        <input class="form-control fs-2" type="text" id="firstname" placeholder="Entrez votre prénom"
                               name="firstname" value="<?= $_SESSION['data']['firstname'] ?? ''; ?>">
                    </div>
                    <div id="emailField">
                        <label class="form-label fs-2 my-3" for="email">Email</label>
                        <input class="form-control fs-2" type="text" id="email" placeholder="Entrez votre email"
                               name="email" value="<?= $_SESSION['data']['email'] ?? ''; ?>">
                    </div>
                    <div id="pwdField">
                        <label class="form-label fs-2 my-3" for="passwd">Mot de passe</label>
                        <input class="form-control fs-2" type="password" id="passwd"
                               placeholder="Entrez votre Mot de pass" name="passwd">
                    </div>
                    <div id="dbsField">
                        <label class="form-label fs-2 my-3" for="dbs">Catégorie</label>
                        <select class="form-control text-center fs-2" name="category" id="dbs">
                            <option value="">===catégorie===</option>
                            <option value="students">élèves</option>
                            <option value="teachers">enseignants</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="" type="checkbox" id="invalidCheck"
                                   name="gpdr" <?php if (isset($_SESSION['data']['gpdr']) && $_SESSION['data']['gpdr'] === 'on') echo 'checked'; ?>>
                            <label class="form-check-label fs-3" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <div class="text-center my-3">
                        <button id="submit" type="submit" class="btn btn-primary fs-1">Envoyer</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <?php unset($_SESSION['message']); ?>
    <?php unset($_SESSION['errors']); ?>
    <?php unset($_SESSION['data']); ?>
</main>
<?php include_once 'includes/footer.php'; ?>
