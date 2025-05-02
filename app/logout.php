<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    unset($_SESSION['user']);
    session_destroy();
    header('Refresh:2, url=login.php');
    echo '
        <!doctype html>
        <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>
            <body class="container my-5">
                <main class="row my-5">
                    <div class="col-12 text-center my-5">
                        <h1 class="fs-1 text-uppercase text-primary">Logout Done</h1>
                        <p class="fs-1 text-uppercase text-danger">Redirecting ...</p>
                    </div>
                </main>
            </body>
        </html>
          ';
    exit;
}


