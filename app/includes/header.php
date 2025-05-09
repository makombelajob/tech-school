<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../old_css_style/stylesheet.css?v=1.3"> -->
    <link rel="stylesheet" href="../css/style.css?v=3.4">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Js/script.js?v=1.3" type="module"></script>
    <title>tech-school</title>
</head>
<body>
<header class="container">
    <div class="row align-items-center m-auto">
        <nav class="nav">
            <div class="col-8 col-md-10 col-lg">
                <a class="col-lg ms-1" href="../">
                    <img src="../assets/Logo.png" alt="Logo du site">
                </a>
            </div>
            <div class="d-none col-lg-10 d-lg-flex justify-content-between">
                <?php include_once 'options.php'; ?>
            </div>
            <div class="col col-lg-1">
                <div class="dropdown">
                    <div class="dropdown-menu dropdown-menu-text-info-emphasis d-lg-none" id="collapse">
                        <ul class="list-unstyled d-md-flex flex-lg-row flex-column mb-0">
                            <li><a class="text-decoration-none fs-4 text-black p-2 dropdown-item active"
                                   href="../">Accueil</a></li>
                            <li><a class="text-decoration-none fs-4 text-black p-2 dropdown-item" href="../about.php">A
                                    propos</a></li>
                            <li><a class="text-decoration-none fs-4 text-black p-2 dropdown-item" href="../signup.php">Signup</a>
                            </li>
                            <li><a class="text-decoration-none fs-4 text-black p-2 dropdown-item" href="../login.php">Login</a>
                            </li>
                            <li><a class="text-decoration-none fs-4 text-black p-2 dropdown-item"
                                   href="../index.php#contact">Contacter</a></li>
                        </ul>
                        <button type="button" class="btn-close fs-4" aria-label="Close"></button>
                    </div>
                    <svg class="col col-lg-12 me-0" id="theme-switch" width="30" height="30"
                         fill="#e4e453">
                        <use href="assets/sprites.svg#light"></use>
                    </svg>
                    <svg class="col d-lg-none me-0" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                         id="burger" width="30" height="30" fill="">
                        <use href="assets/sprites.svg#burger"></use>
                    </svg>

                </div>
            </div>
        </nav>
    </div>
</header>