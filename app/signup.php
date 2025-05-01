<?php include_once 'includes/header.php'; ?>
<main class="container">
    <div class="row h-100">
        <section id="signup">
            <h1 class="fs-1 text-center text-uppercase my-3 fw-bolder">Inscription</h1>
            <form action="" id="formSignup">
                <div id="nameField">
                    <label class="form-label fs-1 my-3" for="name">Nom</label>
                    <input class="form-control fs-2" type="text" id="name" placeholder="Entrez votre nom">
                </div>
                <div id="lastNameField">
                    <label class="form-label fs-1 my-3" for="lastName">Prénom</label>
                    <input class="form-control fs-2" type="text" id="lastName" placeholder="Entrez votre prénom">
                </div>
                <div id="emailField">
                    <label class="form-label fs-1 my-3" for="email">Email</label>
                    <input class="form-control fs-2" type="text" id="email" placeholder="Entrez votre email">
                </div>
                <div id="pwdField">
                    <label class="form-label fs-1 my-3" for="passwd">Mot de passe</label>
                    <input class="form-control fs-2" type="password" id="passwd" placeholder="Entrez votre Mot de pass">
                </div>
                <div id="pwdConfirmField">
                    <label class="form-label fs-1 my-3" for="passwdConfirm">confirmer le mot de passe</label>
                    <input class="form-control fs-2" type="password" id="passwdConfirm" placeholder="Confirmer le Mot de pass">
                </div>
                <div id="dbsField">
                    <label class="form-label fs-1 my-3" for="dbs">Catégorie</label>
                    <select class="form-control text-center fs-2" name="dbs" id="dbs">
                        <option value="">===catégorie===</option>
                        <option value="students">élèves</option>
                        <option value="teachers">enseignants</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label fs-1" for="invalidCheck">
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
