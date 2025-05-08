<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $email = $_POST['email'];
    $password = $_POST['passwd'];
    $category = htmlspecialchars($_POST['category']);
    $gpdr = htmlspecialchars($_POST['gpdr']) ?? '';

    $_SESSION['data'] = compact('lastname', 'firstname', 'email', 'password', 'category', 'gpdr');

    if (empty($lastname) || empty($firstname) || empty($email) || empty($password) || empty($category) || empty($gpdr)) {
        $_SESSION['message'] = 'Veuillez remplir tout le champs';
        header('Location: signup.php');
        exit;
    }
    if (strlen($lastname) > 50 || strlen($firstname) > 50) {
        $_SESSION['errors']['lastname_firstname'] = 'Le nom et le prénom ne doivent pas dépasser 50 caractères';
        header('Location: signup.php');
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['email'] = 'L\'email doit être valide';
        header('Location: signup.php');
        exit;
    }
    if (strlen($password) < 16) {
        $_SESSION['errors']['password'] = 'Le mot de passe doit contenir 16 caractères max';
        header('Location: signup.php');
        exit;
    }
}