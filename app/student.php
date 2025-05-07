<?php
include_once 'includes/verify_session.php';

require_once 'includes/dbconnect.php';
$sql = 'SELECT Result.grade, Result.remarque, Course.* FROM Result INNER JOIN Course ON Result.course_id = Course.course_id WHERE Result.user_id = :id;';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_SESSION['user']['id'], PDO::PARAM_INT);
if ($stmt->execute()) {
    $resultUsers = $stmt->fetchAll();
}

include_once 'includes/header.php';
?>
<main class="container">
    <div class="row">
        <div class="col m-1">
            <form action="logout.php" method="post">
                <button class="btn btn-danger rounded-5 ms-auto" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-power" viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1z"/>
                        <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812"/>
                    </svg>
                </button>
            </form>
        </div>
        <section class="col-12" id="students_infos">
            <h1>Bienvenu <span
                        class="text-uppercase text-primary"><?= $_SESSION['user']['lastname'] . ' ' . $_SESSION['user']['firstname']; ?></span>
            </h1>
            <article class="text-center bg-warning rounded-2">
                <h2>Informations générales</h2>
                <p class="fs-2">Prochaines vacances du 05 mai au 15 mai</p>
            </article>
            <div class="col-12">
                <article class="alert alert-primary">
                    <h2 class="fs-1"><span
                                class="text-uppercase"><?= $_SESSION['user']['lastname']; ?> </span> <?= $_SESSION['user']['firstname']; ?>
                    </h2>
                    <h3>Class: 1ère</h3>
                </article>
                <?php if (!empty($resultUsers)) : ?>
                    <?php foreach ($resultUsers as $resultUser) : ?>
                        <article class="alert alert-info rounded-5 p-3 my-3">
                            <h2><?= $resultUser['name'] ?? ''; ?> : <?= $resultUser['grade'] ?? ''; ?> / 20</h2>
                        </article>
                    <?php endforeach; ?>
                <?php else : ?>
                    <article class="alert alert-info rounded-5 p-3 my-3">
                        <h2>Aucun_cours_suivis : -- / 20</h2>
                    </article>
                <?php endif; ?>
            </div>
        </section>
        <section class="col-12" id="courses_details">
            <h2 class="text-center text-uppercase fs-1 my-3">Remarques</h2>
            <?php if (!empty($resultUsers)) : ?>
                <?php foreach ($resultUsers as $resultUser) : ?>
                    <article class="alert alert-danger rounded-5 p-3 my-3">
                        <h2><?= $resultUser['name'] ?? ''; ?></h2>
                        <?= $resultUser['remarque'] ?? ''; ?>
                    </article>
                <?php endforeach; ?>
            <?php else : ?>
                <article class="alert alert-info rounded-5 p-3 my-3">
                    <h2>Aucun_cours_suivis : -- / 20</h2>
                </article>
            <?php endif; ?>
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
                    <button class="btn btn-primary fs-2" type="submit">Envoyer</button>
                </div>
            </form>
        </section>
    </div>
</main>
<?php include_once 'includes/footer.php'; ?>
