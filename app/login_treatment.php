<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    session_start();
    $email = htmlspecialchars($_POST['email']) ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';

    $_SESSION['data'] = compact('email', 'role');

    if(empty($email) || empty($password) || empty($role)){
        $_SESSION['message'] = 'Vous devez remplir tout le champs';
        header('Location: login.php');
        exit;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['errors']['email'] = 'L\'email doit être valide';
        header('Location: login.php');
        exit;
    }
    if(strlen($password) < 10){
        $_SESSION['errors']['password'] = 'Le mot de passe doit faire plus de 10 ';
        header('Location: login.php');
        exit;
    }
    if($role !== 'administrator' && $role !== 'teacher' && $role !== 'parent' && $role !== 'student'){
        $_SESSION['errors']['role'] = 'Veuillez choisir un de 4 choix';
        header('Location: login.php');
        exit;
    }

    require_once 'includes/dbconnect.php';

    $sql = 'SELECT * FROM User INNER JOIN Role ON User.role_id = Role.role_id WHERE email = :email;';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    if($stmt->execute()){
        $user = $stmt->fetch();
        if(!$user){
            $_SESSION['message'] = 'Une erreur est survenue';
            header('Location: login.php');
            exit;
        }
        $passVerify = password_verify($password, $user['password']);
        if(!$passVerify){
            $_SESSION['message'] = 'Une erreur est survenue';
            header('Location: login.php');
            exit;
        }

        if($role !== $user['name']){
            $_SESSION['message'] = 'Une erreur est survenue';
            header('Location: login.php');
            exit;
        }
        $_SESSION['user'] = [
            'id' => $user['user_id'],
            'lastname' => $user['lastname'],
            'firstname' => $user['firstname'],
            'email' => $user['email'],
            'name' => $user['name']
        ];
        if($role === 'student'){
            header('Location: student.php');
            exit;
        }
        if($role === 'parent'){
            header('Location: adminBoard.php');
            exit;
        }
        if($role === 'teacher'){
            header('Location: teacher.php');
            exit;
        }
        if($role === 'administrator'){
            header('Location: adminBoard.php');
            exit;
        }

    }
}

echo 'Bad request';