<?php
global $pdo;
require_once '../includes/dbconnect.php';

function createTable($pdo): void
{
    $queries = [
        "DROP DATABASE IF EXISTS techSchool;",
        "CREATE DATABASE techSchool;",
        "USE techSchool;",
        "
        CREATE TABLE IF NOT EXISTS Category (
        category_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50)
    );

    CREATE TABLE IF NOT EXISTS Role (
        role_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50),
        level INT
    );

    CREATE TABLE IF NOT EXISTS User (
        user_id INT PRIMARY KEY AUTO_INCREMENT,
        lastname VARCHAR(50) NOT NULL,
        firstname VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        last_login DATETIME,
        reset_token VARCHAR(32),
        role_id INT NOT NULL,
        FOREIGN KEY (role_id) REFERENCES Role(role_id)
    );

    CREATE TABLE IF NOT EXISTS Course (
        course_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        coefficient DECIMAL(15,2) NOT NULL,
        type VARCHAR(50) NOT NULL
    );

    CREATE TABLE IF NOT EXISTS Schedule (
        session_id INT PRIMARY KEY AUTO_INCREMENT,
        day DATETIME NOT NULL,
        session_start DATETIME NOT NULL,
        session_end DATETIME NOT NULL,
        room INT NOT NULL,
        course_id INT NOT NULL,
        FOREIGN KEY (course_id) REFERENCES Course(course_id)
    );

    CREATE TABLE IF NOT EXISTS Resource (
        resource_id INT PRIMARY KEY AUTO_INCREMENT,
        file_name VARCHAR(50),
        file_type VARCHAR(50),
        upload_time DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    );

    CREATE TABLE IF NOT EXISTS Class (
        class_id INT PRIMARY KEY AUTO_INCREMENT,
        class_name VARCHAR(50) NOT NULL,
        level VARCHAR(50) NOT NULL,
        school_year VARCHAR(50) NOT NULL,
        course_id INT NOT NULL,
        FOREIGN KEY (course_id) REFERENCES Course(course_id)
    );

    CREATE TABLE IF NOT EXISTS Result (
        result_id INT PRIMARY KEY AUTO_INCREMENT,
        grade INT NOT NULL,
        monthly INT,
        yearly INT,
        user_id INT NOT NULL,
        course_id INT NOT NULL,
        remarque VARCHAR(1000) NOT NULL,
        FOREIGN KEY (user_id) REFERENCES User(user_id),
        FOREIGN KEY (course_id) REFERENCES Course(course_id)
    );

    CREATE TABLE IF NOT EXISTS Payment (
        payment_id INT PRIMARY KEY AUTO_INCREMENT,
        amount INT NOT NULL,
        date_ DATETIME,
        method VARCHAR(50) NOT NULL,
        status VARCHAR(50) NOT NULL,
        type VARCHAR(50) NOT NULL,
        period VARCHAR(100) NOT NULL,
        user_id INT NOT NULL,
        FOREIGN KEY (user_id) REFERENCES User(user_id)
    );

    CREATE TABLE IF NOT EXISTS Access (
        course_id INT NOT NULL,
        resource_id INT NOT NULL,
        PRIMARY KEY (course_id, resource_id),
        FOREIGN KEY (course_id) REFERENCES Course(course_id),
        FOREIGN KEY (resource_id) REFERENCES Resource(resource_id)
    );

    CREATE TABLE IF NOT EXISTS Belong (
        user_id INT NOT NULL,
        class_id INT NOT NULL,
        PRIMARY KEY (user_id, class_id),
        FOREIGN KEY (user_id) REFERENCES User(user_id),
        FOREIGN KEY (class_id) REFERENCES Class(class_id)
    );

    CREATE TABLE IF NOT EXISTS BelongTo (
        course_id INT NOT NULL,
        category_id INT NOT NULL,
        PRIMARY KEY (course_id, category_id),
        FOREIGN KEY (course_id) REFERENCES Course(course_id),
        FOREIGN KEY (category_id) REFERENCES Category(category_id)
    );

    CREATE TABLE IF NOT EXISTS Teach (
        user_id INT NOT NULL,
        course_id INT NOT NULL,
        PRIMARY KEY (user_id, course_id),
        FOREIGN KEY (user_id) REFERENCES User(user_id),
        FOREIGN KEY (course_id) REFERENCES Course(course_id)
    )"
    ];

    foreach ($queries as $query) {
        $pdo->exec($query);
    }
}

function insertCategory($pdo): void
{
    // Insert into Category table
    $categories = [
        ['Computer Science'],
        ['Sports'],
        ['Cooking'],
        ['Travel'],
        ['Education']
    ];
    $stmt = $pdo->prepare("INSERT INTO Category (name) VALUES (?)");
    foreach ($categories as $category) {
        $stmt->execute($category);
    }
}

function insetRole($pdo): void
{
    // Insert into Role table
    $roles = [
        ['administrator', 99],
        ['teacher', 70],
        ['parent', 50],
        ['student', 30]
    ];
    $stmt = $pdo->prepare("INSERT INTO Role ( name, level) VALUES (?, ?)");
    foreach ($roles as $role) {
        $stmt->execute($role);
    }
}

function insertCourse($pdo): void
{
    // Insert into Course table
    $courses = [
        ['Mathematics', 3.00, 'Theory'],
        ['Physics', 2.50, 'Practical'],
        ['Computer Science', 4.00, 'Theory'],
        ['Chemistry', 2.00, 'Practical'],
        ['History', 1.50, 'Theory'],
        ['English', 2.00, 'Theory'],
        ['Biology', 3.00, 'Practical'],
        ['Economics', 1.00, 'Theory'],
        ['Philosophy', 1.50, 'Theory'],
        ['Geography', 2.00, 'Practical'],
        ['French', 2.50, 'Theory'],
        ['Sociology', 1.50, 'Theory'],
        ['Arts', 1.00, 'Practical'],
        ['Music', 2.00, 'Practical'],
        ['Sports', 1.00, 'Practical'],
        ['Psychology', 2.00, 'Theory'],
        ['Law', 3.50, 'Theory'],
        ['Management', 2.00, 'Theory'],
        ['Literature', 1.50, 'Theory'],
        ['Pharmacy', 2.00, 'Practical']
    ];
    $stmt = $pdo->prepare("INSERT INTO Course (name, coefficient, type) VALUES (?, ?, ?)");
    foreach ($courses as $course) {
        $stmt->execute($course);
    }
}

function insertRessource($pdo): void
{
    // Insert into Resource table
    $resources = [
        ['math_course_2025.pdf', 'PDF'],
        ['physics_course_2025.docx', 'Word']
        // Add other resources...
    ];

    $stmt = $pdo->prepare("INSERT INTO Resource ( file_name, file_type) VALUES (?, ?)");
    foreach ($resources as $resource) {
        $stmt->execute($resource);
    }
}

function insertIntoResult($pdo)
{
    $results = [
        [8, 24, 9, '<p class="fs-3 text-danger">Tu dois t\'améliorer sur partie 2 du cours.</p>
         <p class="fs-3 text-primary">L\'erreur 3 vient du fait que tu as à la base utiliser une mauvaise formule </p>'],
        [10, 24, 5, '<p class="fs-3 text-danger">Tu dois t\'améliorer sur partie 2 du cours.</p>
         <p class="fs-3 text-primary">L\'erreur 1 et 9 vient du fait que tu as à la base utiliser une mauvaise formule </p>'],
        [10, 24, 2, '<p class="fs-3 text-danger">Tu dois t\'améliorer sur partie 2 du cours.</p>
         <p class="fs-3 text-primary">L\'erreur 10 et 7 vient du fait que tu as à la base utiliser une mauvaise formule </p>'],
        [12, 20, 8, '<p class="fs-3 text-danger">Tu dois t\'améliorer sur partie 2 du cours.</p>
         <p class="fs-3 text-primary">L\'erreur 6, 4 et 5 vient du fait que tu as à la base utiliser une mauvaise formule </p>'],
        [15, 19, 10, '<p class="fs-3 text-danger">Tu dois t\'améliorer sur partie 2 du cours.</p>
         <p class="fs-3 text-primary">L\'erreur 7, 5 et 10 vient du fait que tu as à la base utiliser une mauvaise formule </p>'],
        [7, 17, 1, '<p class="fs-3 text-danger">Tu dois t\'améliorer sur partie 2 du cours.</p>
         <p class="fs-3 text-primary">L\'erreur 1, 2, 3 et 9vient du fait que tu as à la base utiliser une mauvaise formule </p>'],
        [10, 20, 4, '<p class="fs-3 text-danger">Tu dois t\'améliorer sur partie 2 du cours.</p>
         <p class="fs-3 text-primary">L\'erreur 7, 10 et 5 vient du fait que tu as à la base utiliser une mauvaise formule </p>'],
        [11, 23, 2, '<p class="fs-3 text-danger">Tu dois t\'améliorer sur partie 2 du cours.</p>
         <p class="fs-3 text-primary">L\'erreur 1, 2 et 8 vient du fait que tu as à la base utiliser une mauvaise formule </p>']
    ];
    $stmt = $pdo->prepare("INSERT INTO Result (grade, user_id, course_id, remarque) VALUES ( ?, ?, ?, ?)");
    foreach ($results as $result) {
        $stmt->execute($result);
    }
}

function insertClasse($pdo): void
{
    // Insert into Class table
    $classes = [
        ['Class A', 'First Year', '2025-2026', 1],
        ['Class B', 'Final Year', '2025-2026', 2]
    ];

    $stmt = $pdo->prepare("INSERT INTO Class (class_name, level, school_year, course_id) VALUES ( ?, ?, ?, ?)");
    foreach ($classes as $class) {
        $stmt->execute($class);
    }
}

function insertSchedule($pdo): void
{
    // Insert into Schedule table
    $schedules = [
        ['2025-04-01', '2025-04-01 09:00:00', '2025-04-01 12:00:00', 101, 1],
        ['2025-04-02', '2025-04-02 14:00:00', '2025-04-02 17:00:00', 102, 2]
        // Add other schedules...
    ];

    $stmt = $pdo->prepare("INSERT INTO Schedule ( day, session_start, session_end, room, course_id) VALUES ( ?, ?, ?, ?, ?)");
    foreach ($schedules as $schedule) {
        $stmt->execute($schedule);
    }
}

function insertUser($pdo): void
{
    // Insert into User table
    $users = [
        ['Dupont', 'Pierre', 'pierre.dupont@example.com', '$2y$12$pWm6wSskinocw8ABVxA1GuSE77bt2iFbnZBR/athLYigoiMYwIjRu', 1],
        ['Durand', 'Marie', 'marie.durand@example.com', '$2y$12$84cnXhpLMTO9loAiSDaVzuJTc2idqjyxWBQamhwXv1FOO66M5UOjm', 2],
        ['Lemoine', 'Julien', 'julien.lemoine@example.com', '$2y$12$X8k1GKR63aM6t36g48rZLOqtA2UYCuN3NbVPQV1lpMnh1hO2G7QXG', 2],
        ['Moreau', 'Sophie', 'sophie.moreau@example.com', '$2y$12$K6e5EcCZ/L4RaAuDl6tNNuK2xZ3RT8/0DxCbspU2qUeN72cx7j2jy', 2],
        ['Martin', 'Alexandre', 'alexandre.martin@example.com', '$2y$12$QGK5upMegmIqJY5Y7wnr9eblRLTYM8hbxpX.de1jlJLr/ypvv7FWu', 2],
        ['Petit', 'Isabelle', 'isabelle.petit@example.com', '$2y$12$fjGiaH7yNUyWgE3VZbepxeoo2SW4EyQvesxtk7QSHAAHFrWzPjKyu', 2],
        ['Roux', 'Marc', 'marc.roux@example.com', '$2y$12$QdOAzs94xBOahicgOa5gxO9qf5hih7YjiuGBQXaKOofLf.bbwUk/W', 2],
        ['Lemoine', 'Chloé', 'chloe.lemoine@example.com', '$2y$12$7oXzdPcnCMRF4yfUyH3ll.4bkpE3uKGZqYjVQwzADMFtgrXVWq53S', 3],
        ['Vasseur', 'Benoît', 'benoit.vasseur@example.com', '$2y$12$axN0junW/vX7v2ur6GIDEusT0qFRrHaiZiVZT1q0u7oHdFn9E778a', 3],
        ['Leclerc', 'Nathalie', 'nathalie.leclerc@example.com', '$2y$12$qYZKfcCREVy/FXfwGALGou2m8NzX8rz8wV3ruzSgtICQSQFQPBm1W', 3],
        ['Garnier', 'Laurent', 'laurent.garnier@example.com', '$2y$12$5EQrCZKM5Xwwal16P8yDNeexqqFKvcG9fz9Up3e.1zbjHu7oPQDXe', 3],
        ['Pires', 'José', 'jose.pires@example.com', '$2y$12$OUopCFUW3nhTWrLyLW4b1.8I5rt9qHFqV6.3yLAAC7yj3ZY2vo.bO', 3],
        ['Benoit', 'Sandrine', 'sandrine.benoit@example.com', '$2y$12$xRgjoo0nx6HH.39mErAnE.8Y.dfodlieK3hnpw6oON3rrOgD8ic2O', 3],
        ['Hernandez', 'David', 'david.hernandez@example.com', '$2y$12$l.SZA.ew1MnystNhTlUAAOc0Yw/vliCF6WULvJ5mAMX3oRjRaPGCG', 3],
        ['Cohen', 'Rachel', 'rachel.cohen@example.com', '$2y$12$wzXGG0xtS..e/4dN3EZRm.Q.x/iQ.P4XHmGfXEll3iwvMqoMLSjYC', 3],
        ['Lemoine', 'Pierre', 'pierre.lemoine@example.com', '$2y$12$3RroWgzyUbdNNnCvKIQkIudaZ4F2d6MhXolVDkW1P4JcIbWRBzXT2', 4],
        ['Marchal', 'Lucie', 'lucie.marchal@example.com', '$2y$12$Nd1kbO9fmUn/LUONsiT9h.KWPIqu6xYV0yDTI1OI6JJVfPdOAtFSm', 4],
        ['Faure', 'Victor', 'victor.faure@example.com', '$2y$12$t1z1K/dFxmVXaaibyOsaueBOXKeZ6ZcJxc9ITZKJ56MWvABOoUYLS', 4],
        ['Lemoine', 'Éric', 'eric.lemoine@example.com', '$2y$12$Ch4cVvp6q1ZragC2gkskEeGP96nI70EeS.YGRgMf4v2gUejDkHAtu', 4],
        ['Bourgeois', 'Claire', 'claire.bourgeois@example.com', '$2y$12$W.v0BVX0H55FXSRVaFP1xe4cIsCAEf3XS6rq8EorHOJT5j7L2.nua', 4],
        ['Leblanc', 'Michel', 'michel.leblanc@example.com', '$2y$12$ch62kQfQbi2yQ11L/vbYouwioN0lmvpGjF2s92lI543N56ewIV.9O', 4],
        ['Dufresne', 'Élise', 'elise.dufresne@example.com', '$2y$12$b0eqYKlok8U3lvtKgKYvOu8K8s.E6716aeWWM7rxAIC5aFzv3oHLO', 4],
        ['Meyer', 'David', 'david.meyer@example.com', '$2y$12$fHFWG1nJvb3UzRa7mvkl7eTXWjAqP0O7HpVm2uknv1LXIiMIzssQ.', 4],
        ['Robert', 'Christine', 'christine.robert@example.com', '$2y$12$nfBgE3FdTDVYmfHNyR9ZveJlEB0xB.6k.O0WzU1M.yjvMrlafbMSe', 4],
        ['Bardin', 'Thomas', 'thomas.bardin@example.com', '$2y$12$fsVBLMFXBU0b.HvA6qie3.vrUjJwsc7paxb9olwKZsMqMb6lIR5AS', 4],
        ['Lecomte', 'Valérie', 'valerie.lecomte@example.com', '$2y$12$IGaHqA7iqCUXCpgh5FOcWeYDmaACy6WnU9C1ZfQGIn950GAAEEXma', 4],
        ['Blanc', 'Gérard', 'gerard.blanc@example.com', '$2y$12$xQwTnnAgIQw56supDRV0OeeH9QBM4TwkiELwzjq6zeKNe/3C1odtK', 4],
        ['Valente', 'Sébastien', 'sebastien.valente@example.com', '$2y$12$XN5hT6SPyLsugHkBmlijIeHfMznrucEwfC6QMOG/sD.8S/budLD8W', 4],
        ['Francois', 'Anne', 'anne.francois@example.com', '$2y$12$yJn88c1y2r4JyjXoXNlsI.lfJUKJMA6Eee87u1tyOuSqA7CJDKcqK', 4],
        ['Perrier', 'François', 'francois.perrier@example.com', '$2y$12$Dv1IXqbHdprh8l.1pcYY9eI2.cjD8k0l3f8ncM6J3eyUpUlXtNJYS', 4],
        ['Charbonnier', 'Luc', 'luc.charbonnier@example.com', '$2y$12$iP3nmSl0jq42t/OIQHay2OW2CemjIe/z7wbcD6K2jEuDgV5RKaj66', 4],
        ['Galliard', 'Isabelle', 'isabelle.galliard@example.com', '$2y$12$mOL25vOCmoUAvciFGBZOxeGDQZWbERm4dY9YllfFmr0yVRNKZ4oei', 4],
        ['Beaufort', 'Bernard', 'bernard.beaufort@example.com', '$2y$12$rVBjBZmH.UpdSlUbz4gMa.oDno0rpDQCy7KnsLQX/eiSsNbTDyOi2', 4],
        ['Olivier', 'Sophie', 'sophie.olivier@example.com', '$2y$12$fax3G4IRRdcLdwmQeNkV1OYRvxpGoYjraWlgYgFl3bvSRN77aThgq', 4],
        ['Dubois', 'Éric', 'eric.dubois@example.com', '$2y$12$HYyfg2N73O16MHJtw/QFqO/kUin1cnaxIUudiwXkS4EwvUYY8exsW', 4],
        ['Fournier', 'Carole', 'carole.fournier@example.com', '$2y$12$4ugfywzTwmD.W.58AU72hekNhoGzlIJU96s3E31OW2c/jLCAynuvO', 4],
        ['Boucher', 'Hélène', 'helene.boucher@example.com', '$2y$12$NFZTygk8RScB4vSvV.QuhuWwawtr22n5NNj59T9WzNO0imcvqgD7C', 4],
        ['Giraud', 'Laurent', 'laurent.giraud@example.com', '$2y$12$Jr42hZLjL0X54NLTtXgJEucLKtpgonDTFOFyLurtdzqvM0KEEppQ2', 3],
        ['Schmitt', 'Julie', 'julie.schmitt@example.com', '$2y$12$jlBgQm3VTC4Je3M.X6c7leRuUh3hhFQiWnLKotdXdvWL2619qpOHC', 4],
        ['Dumas', 'Paul', 'paul.dumas@example.com', '$2y$12$Fi2er0uGs.VEEn0oPNwZ1eA8FRzwXFS7gJ61l4tSySxfiITBDCQFK', 4],
        ['Zhang', 'Yue', 'yue.zhang@example.com', '$2y$12$fgbK9APEdA5VYtwoRhEaOu1l/geFMlpsgtAv2.bDg6ZIzlV9yqNIG', 4],
        ['Joubert', 'Michel', 'michel.joubert@example.com', '$2y$12$6yyOkHMFiPu3dHD.N4z4cetzmrUHhV/xVAtVBXRkEylNFvyoxwq2W', 4],
        ['Bélanger', 'Viviane', 'viviane.belanger@example.com', '$2y$12$k5.UWiVW5EkIGzVX6dt77ezQLXDj2wf.7DD1kMdfAD8L/3hmNMN0m', 4],
        ['Laurent', 'Benoit', 'benoit.laurent@example.com', '$2y$12$gGyUIgYdC8N39Ibg0jrCBu1E2dGnD.RJ.BcUaK0te6xBz8dixzdMK', 4],
        ['Savary', 'Bernadette', 'bernadette.savary@example.com', '$2y$12$o38aI8IlgLZhJf8qfG6Di.E87zs9cthWqLGK8HMB8OVV0l9UDVP.G', 4],
        ['Menard', 'Géraldine', 'geraldine.menard@example.com', '$2y$12$usSF68dLoWRbYOblC.NHfu6sES13meXc09UC1e76bb1vB8J55iOpy', 4],
        ['Collin', 'Franck', 'franck.collin@example.com', '$2y$12$FKJ6SmUqcLpyrwWIke3O6OrC73wuFiODOnGeuzpE6VdgvC3TBUfAi', 4],
        ['Bisson', 'Véronique', 'veronique.bisson@example.com', '$2y$12$H26p6Y9zyNd/Apc4zi78lOFgYgCg1Brdcm.yJqmu1TQVVeJarbtJu', 4],
        ['Lemoine', 'Luc', 'luc.lemoine@example.com', '$2y$12$nvuAbt3UDGoIAYmFdNTZNunR9EgZN5lYaAcxAVS3RUqsTHs2Bu7fC', 4],
        ['Royer', 'Arnaud', 'arnaud.royer@example.com', '$2y$12$TaZ7C6mZfWBHWFGa/aczi.Dbq2egqW38B7d0pT33Bs1vOJlwa40Bq', 4]
    ];

    $stmt = $pdo->prepare("INSERT INTO User (lastname, firstname, email, password, role_id) VALUES ( ?, ?, ?, ?, ?)");
    foreach ($users as $user) {
        $stmt->execute($user);
    }
}

echo 'BD initialise';

createTable($pdo);
insertCategory($pdo);
insetRole($pdo);
insertUser($pdo);
insertCourse($pdo);
insertSchedule($pdo);
insertRessource($pdo);
insertClasse($pdo);
insertIntoResult($pdo);