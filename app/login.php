<?php
session_start();
include_once 'includes/header.php';
?>
<main class="container">
    <div class="row h-100">
        <section>
            <h1 class="fs-1 text-center text-uppercase my-3 fw-bolder">Inscription</h1>
            <?php include_once 'includes/flash_message.php';?>
            <?php include_once 'includes/flash_errors.php';?>
            <form action="login_treatment.php" id="formSignup" method="post">
                <div id="emailField">
                    <label class="form-label fs-1 my-3" for="email">Email</label>
                    <input class="form-control fs-2" type="text" id="email" placeholder="Entrez votre email" name="email">
                </div>
                <div id="pwdField">
                    <label class="form-label fs-1 my-3" for="passwd">Mot de passe</label>
                    <input class="form-control fs-2" type="password" id="passwd" placeholder="Entrez votre Mot de pass" name="password">
                </div>
                <div id="dbsField">
                    <label class="form-label fs-1 my-3" for="dbs">Catégorie</label>
                    <select class="form-control text-center fs-2" id="dbs" name="role">
                        <option value="">===catégorie===</option>
                        <option value="student">student</option>
                        <option value="parent">parent</option>
                        <option value="teacher">teacher</option>
                        <option value="admin">admin</option>
                    </select>
                </div>
                <div class="text-center my-3">
                    <button id="submit" type="submit" class="btn btn-primary fs-1">Envoyer</button>
                </div>
            </form>
        </section>
    </div>
    <?php unset($_SESSION['message']);?>
    <?php unset($_SESSION['errors']);?>
</main>
<?php include_once 'includes/footer.php'; ?>
