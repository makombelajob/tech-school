<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $email = htmlspecialchars($_POST['email']) ?? '';
    $subject = htmlspecialchars($_POST['subject']) ?? '';
    $message = htmlspecialchars($_POST['message']) ?? '';
    $gpdr = htmlspecialchars($_POST['gpdr'] ?? '');

    $_SESSION['data'] = [
        'email' => $email,
        'subject' => $subject,
        'message' => $message,
        'gpdr' => $gpdr
    ];

    if (empty($email) || empty($subject) || empty($message) || empty($gpdr)) {
        $_SESSION['message'] = 'Veuillez remplir tout le champs';
        header('Location: /#contact');
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['email'] = 'L\'email n\'est pas valide';
        header('Location: /#contact');
        exit;
    }
    if (strlen($subject) > 20) {
        $_SESSION['errors']['subject'] = 'Le sujet ne doit pas dépasser 20 caractères';
        header('Location: /#contact');
        exit;
    }
    if (strlen($message) > 200) {
        $_SESSION['errors']['message'] = 'Le message ne doit pas dépasser 200 caractères';
        header('Location: /#contact');
        exit;
    }
}