<?php

$passwords = [];
for($index = 1; $index <= 50; $index++){
    $passwords[] = 'password1' . str_pad($index, 2, '0', STR_PAD_LEFT);
}
var_dump($passwords);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <?php foreach($passwords as $password) : ;?>
            <p><?= password_hash($password, PASSWORD_DEFAULT);?></p>
        <?php endforeach;?>
    </main>
</body>
</html>
