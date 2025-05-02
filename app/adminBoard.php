<?php
include_once 'includes/verify_session.php';
require_once 'includes/dbconnect.php';

$sql = 'SELECT * FROM User WHERE role_id = 4;';
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll();

$sql = 'SELECT * FROM User WHERE role_id = 3;';
$stmt = $pdo->query($sql);
$parents = $stmt->fetchAll();

$sql = 'SELECT * FROM User WHERE role_id = 2;';
$stmt = $pdo->query($sql);
$teachers = $stmt->fetchAll();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin board</title>
</head>
<body>
    <header class="container">
        <div class="row">
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Admin board</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Tech-School</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Persons
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#students">Students</a></li>
                                        <li><a class="dropdown-item" href="#parents">Parents</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#teachers">Teachers</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <form action="logout.php" method="post">
                                            <button class="btn btn-danger rounded-3 ms-auto" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                                    <path d="M7.5 1v7h1V1z"/>
                                                    <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </a>
                                </li>
                            </ul>
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <div class="text-center my-5">
                    <h1 class="fs-1 text-uppercase text-primary">Admin board</h1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <article id="students" class="alert alert-warning">
                            <h2 class="text-center text-uppercase fs-3 text-secondary">Les élèves</h2>
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="">
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody class="">
                                <?php foreach($users as $user) : ;?>
                                    <tr>
                                        <td><?= $user['user_id'];?></td>
                                        <td><?= $user['lastname'];?></td>
                                        <td><?= $user['firstname'];?></td>
                                        <td><?= $user['email'];?></td>
                                    </tr>
                                <?php endforeach;?>

                                </tbody>
                            </table>
                        </article>
                        <article id="parents" class="alert alert-danger">
                            <h2 class="text-center text-uppercase fs-3 text-secondary">Les parents</h2>
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="">
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody class="">
                                <?php foreach($parents as $parent) : ;?>
                                    <tr>
                                        <td><?= $parent['user_id'];?></td>
                                        <td><?= $parent['lastname'];?></td>
                                        <td><?= $parent['firstname'];?></td>
                                        <td><?= $parent['email'];?></td>
                                    </tr>
                                <?php endforeach;?>

                                </tbody>
                            </table>
                        </article>
                        <article id="teachers" class="alert alert-info">
                            <h2 class="text-center text-uppercase fs-3 text-secondary">Les enseignants</h2>
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="">
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody class="">
                                <?php foreach($teachers as $teacher) : ;?>
                                    <tr>
                                        <td><?= $teacher['user_id'];?></td>
                                        <td><?= $teacher['lastname'];?></td>
                                        <td><?= $teacher['firstname'];?></td>
                                        <td><?= $teacher['email'];?></td>
                                    </tr>
                                <?php endforeach;?>

                                </tbody>
                            </table>
                        </article>
                    </div>
                </div>
            </section>
        </div>
        <?php include_once 'includes/upButton.php';?>
    </main>
<?php include_once 'includes/footer.php';?>
