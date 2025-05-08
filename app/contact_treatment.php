<?php

use PHPMailer\PHPMailer\PHPMailer;

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
    if (strlen($subject) > 50) {
        $_SESSION['errors']['subject'] = 'Le sujet ne doit pas dépasser 20 caractères';
        header('Location: /#contact');
        exit;
    }
    if (strlen($message) > 200) {
        $_SESSION['errors']['message'] = 'Le message ne doit pas dépasser 200 caractères';
        header('Location: /#contact');
        exit;
    }
    if (!empty($_SESSION['errors'])) {
        $_SESSION['message'] = 'Veuillez remplir tout le champs';
        header('Location: /#contact');
        exit;
    }
    require_once 'includes/Exception.php';
    require_once 'includes/PHPMailer.php';
    require_once 'includes/SMTP.php';

    $mail = new PHPMailer();
    try {

        // configuration du serveur
        $mail->isSMTP();
        $mail->Host = 'mailhog';
        $mail->Port = 1025;

        // Expéditeur
        $mail->setFrom($email);

        // Déstinataire
        $mail->addAddress('admin@tech-school.fr', 'administrateur');

        // Permettre les caractères spéciaux
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        // Sujet du mail
        $mail->Subject = $subject;
        $mail->isHTML(true);
        $mail->Body = $message;

        // Envoie du message
        $mail->send();
        $_SESSION['message'] = 'Mail Envoyé';
        header('Location: /#contact');
        unset($_SESSION['data']);
        exit;
    } catch (Exception $e) {
        $_SESSION['message'] = 'Message non envoyé' . $mail->ErrorInfo;
        header('Location: contact_form.php');
        exit;
    }
}