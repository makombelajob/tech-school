<?php include_once 'includes/header.php'; ?>
<main class="container">
    <div class="row min-vh-100 d-flex justify-content-center align-items-center">
        <section id="signup">
            <h1 class="fs-1 text-center text-uppercase fw-bolder">Inscription</h1>
            <form action="" id="formSignup" method="post" class="alert alert-primary rounded-5 w-lg-75 m-lg-auto">
                <div id="nameField">
                    <label class="form-label fs-2 my-3" for="name">Nom</label>
                    <input class="form-control fs-2" type="text" id="name" placeholder="Entrez votre nom">
                </div>
                <div id="lastNameField">
                    <label class="form-label fs-2 my-3" for="lastName">Prénom</label>
                    <input class="form-control fs-2" type="text" id="lastName" placeholder="Entrez votre prénom">
                </div>
                <div id="emailField">
                    <label class="form-label fs-2 my-3" for="email">Email</label>
                    <input class="form-control fs-2" type="text" id="email" placeholder="Entrez votre email">
                </div>
                <div id="pwdField">
                    <label class="form-label fs-2 my-3" for="passwd">Mot de passe</label>
                    <input class="form-control fs-2" type="password" id="passwd" placeholder="Entrez votre Mot de pass">
                </div>
                <div id="pwdConfirmField">
                    <label class="form-label fs-2 my-3" for="passwdConfirm">confirmer le mot de passe</label>
                    <input class="form-control fs-2" type="password" id="passwdConfirm" placeholder="Confirmer le Mot de pass">
                </div>
                <div id="dbsField">
                    <label class="form-label fs-2 my-3" for="dbs">Catégorie</label>
                    <select class="form-control text-center fs-2" name="dbs" id="dbs">
                        <option value="">===catégorie===</option>
                        <option value="students">élèves</option>
                        <option value="teachers">enseignants</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="" type="checkbox" value="" id="invalidCheck" required>
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
</main>
<?php include_once 'includes/footer.php'; ?>
