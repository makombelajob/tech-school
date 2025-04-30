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
        category_id INT PRIMARY KEY,
        name VARCHAR(50)
    );

    CREATE TABLE IF NOT EXISTS Role (
        role_id INT PRIMARY KEY,
        name VARCHAR(50),
        level INT
    );

    CREATE TABLE IF NOT EXISTS User (
        user_id INT PRIMARY KEY,
        last_name VARCHAR(50),
        first_name VARCHAR(50),
        email VARCHAR(100),
        password VARCHAR(50),
        registration_date DATE,
        last_login DATETIME,
        role_id INT,
        FOREIGN KEY (role_id) REFERENCES Role(role_id)
    );

    CREATE TABLE IF NOT EXISTS Course (
        course_id INT PRIMARY KEY,
        course_name VARCHAR(50),
        coefficient DECIMAL(15,2),
        type VARCHAR(50)
    );

    CREATE TABLE IF NOT EXISTS Schedule (
        session_id INT PRIMARY KEY,
        day DATETIME,
        session_start DATETIME,
        session_end DATETIME,
        room INT,
        course_id INT,
        FOREIGN KEY (course_id) REFERENCES Course(course_id)
    );

    CREATE TABLE IF NOT EXISTS Resource (
        resource_id INT PRIMARY KEY,
        file_name VARCHAR(50),
        file_type VARCHAR(50),
        file_link VARCHAR(50),
        upload_time DATETIME
    );

    CREATE TABLE IF NOT EXISTS Class (
        class_id INT PRIMARY KEY,
        class_name VARCHAR(50),
        level VARCHAR(50),
        school_year VARCHAR(50),
        course_id INT,
        FOREIGN KEY (course_id) REFERENCES Course(course_id)
    );

    CREATE TABLE IF NOT EXISTS Result (
        result_id INT PRIMARY KEY,
        grade INT,
        monthly INT,
        yearly INT,
        user_id INT,
        course_id INT,
        FOREIGN KEY (user_id) REFERENCES User(user_id),
        FOREIGN KEY (course_id) REFERENCES Course(course_id)
    );

    CREATE TABLE IF NOT EXISTS Payment (
        payment_id INT PRIMARY KEY,
        amount INT,
        date_ DATETIME,
        method VARCHAR(50),
        status VARCHAR(50),
        type VARCHAR(50),
        period VARCHAR(100),
        user_id INT,
        FOREIGN KEY (user_id) REFERENCES User(user_id)
    );

    CREATE TABLE IF NOT EXISTS Access (
        course_id INT,
        resource_id INT,
        PRIMARY KEY (course_id, resource_id),
        FOREIGN KEY (course_id) REFERENCES Course(course_id),
        FOREIGN KEY (resource_id) REFERENCES Resource(resource_id)
    );

    CREATE TABLE IF NOT EXISTS Belong (
        user_id INT,
        class_id INT,
        PRIMARY KEY (user_id, class_id),
        FOREIGN KEY (user_id) REFERENCES User(user_id),
        FOREIGN KEY (class_id) REFERENCES Class(class_id)
    );

    CREATE TABLE IF NOT EXISTS BelongTo (
        course_id INT,
        category_id INT,
        PRIMARY KEY (course_id, category_id),
        FOREIGN KEY (course_id) REFERENCES Course(course_id),
        FOREIGN KEY (category_id) REFERENCES Category(category_id)
    );

    CREATE TABLE IF NOT EXISTS Teach (
        user_id INT,
        course_id INT,
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
        [1, 'Computer Science'],
        [2, 'Sports'],
        [3, 'Cooking'],
        [4, 'Travel'],
        [5, 'Education']
    ];
    $stmt = $pdo->prepare("INSERT INTO Category (category_id, name) VALUES (?, ?)");
    foreach ($categories as $category) {
        $stmt->execute($category);
    }
};
function insetRole($pdo): void
{
    // Insert into Role table
$roles = [
    [1, 'Administrator'],
    [2, 'User'],
    [3, 'Moderator']
];
    $stmt = $pdo->prepare("INSERT INTO Role (role_id, name) VALUES (?, ?)");
    foreach ($roles as $role) {
        $stmt->execute($role);
    }
}

function insertCourse($pdo): void
{
    // Insert into Course table
    $courses = [
        [1, 'Mathematics', 3.00, 'Theory'],
        [2, 'Physics', 2.50, 'Practical'],
        [3, 'Computer Science', 4.00, 'Theory'],
        [4, 'Chemistry', 2.00, 'Practical'],
        [5, 'History', 1.50, 'Theory'],
        [6, 'English', 2.00, 'Theory'],
        [7, 'Biology', 3.00, 'Practical'],
        [8, 'Economics', 1.00, 'Theory'],
        [9, 'Philosophy', 1.50, 'Theory'],
        [10, 'Geography', 2.00, 'Practical'],
        [11, 'French', 2.50, 'Theory'],
        [12, 'Sociology', 1.50, 'Theory'],
        [13, 'Arts', 1.00, 'Practical'],
        [14, 'Music', 2.00, 'Practical'],
        [15, 'Sports', 1.00, 'Practical'],
        [16, 'Psychology', 2.00, 'Theory'],
        [17, 'Law', 3.50, 'Theory'],
        [18, 'Management', 2.00, 'Theory'],
        [19, 'Literature', 1.50, 'Theory'],
        [20, 'Pharmacy', 2.00, 'Practical']
    ];
    $stmt = $pdo->prepare("INSERT INTO Course (course_id, course_name, coefficient, type) VALUES (?, ?, ?, ?)");
    foreach ($courses as $course) {
        $stmt->execute($course);
    }
}

function insertUser($pdo): void
{
    // Insert into User table
    $users = [
        [1, 'Dupont', 'Pierre', 'pierre.dupont@example.com', password_hash('password123', PASSWORD_DEFAULT), '2025-01-15', '2025-04-30 09:00:00', 1, 1],
        [2, 'Durand', 'Marie', 'marie.durand@example.com', password_hash('securepassword456', PASSWORD_DEFAULT), '2024-06-22', '2025-04-29 18:45:00', 2, 2],
        [3, 'Lemoine', 'Julien', 'julien.lemoine@example.com', password_hash('password789', PASSWORD_DEFAULT), '2023-03-30', '2025-04-30 12:30:00', 3, 3],
        [4, 'Moreau', 'Sophie', 'sophie.moreau@example.com', password_hash('sophie1234', PASSWORD_DEFAULT), '2024-11-12', '2025-04-28 20:15:00', 2, 4],
        [5, 'Martin', 'Alexandre', 'alexandre.martin@example.com', password_hash('alex4567', PASSWORD_DEFAULT), '2022-08-05', '2025-04-30 08:00:00', 1, 5],
        [6, 'Petit', 'Isabelle', 'isabelle.petit@example.com', password_hash('mypassword123', PASSWORD_DEFAULT), '2023-12-10', '2025-04-30 09:10:00', 3, 1],
        [7, 'Roux', 'Marc', 'marc.roux@example.com', password_hash('123password789', PASSWORD_DEFAULT), '2024-07-21', '2025-04-30 10:30:00', 2, 2],
        [8, 'Lemoine', 'Chloé', 'chloe.lemoine@example.com', password_hash('securepass567', PASSWORD_DEFAULT), '2023-09-14', '2025-04-29 17:50:00', 1, 3],
        [9, 'Vasseur', 'Benoît', 'benoit.vasseur@example.com', password_hash('benoitpass789', PASSWORD_DEFAULT), '2025-01-10', '2025-04-29 15:20:00', 2, 4],
        [10, 'Leclerc', 'Nathalie', 'nathalie.leclerc@example.com', password_hash('nathalie123', PASSWORD_DEFAULT), '2024-04-18', '2025-04-30 11:00:00', 1, 1],
        [11, 'Garnier', 'Laurent', 'laurent.garnier@example.com', password_hash('laurentpass123', PASSWORD_DEFAULT), '2022-11-30', '2025-04-30 13:00:00', 2, 2],
        [12, 'Pires', 'José', 'jose.pires@example.com', password_hash('josepass456', PASSWORD_DEFAULT), '2023-08-12', '2025-04-29 19:35:00', 3, 3],
        [13, 'Benoit', 'Sandrine', 'sandrine.benoit@example.com', password_hash('sandrine789', PASSWORD_DEFAULT), '2023-05-17', '2025-04-29 16:10:00', 1, 4],
        [14, 'Hernandez', 'David', 'david.hernandez@example.com', password_hash('davidpass234', PASSWORD_DEFAULT), '2024-01-24', '2025-04-28 14:25:00', 2, 1],
        [15, 'Cohen', 'Rachel', 'rachel.cohen@example.com', password_hash('rachel1234', PASSWORD_DEFAULT), '2023-10-03', '2025-04-30 12:00:00', 3, 2],
        [16, 'Lemoine', 'Pierre', 'pierre.lemoine@example.com', password_hash('pierre789', PASSWORD_DEFAULT), '2023-12-02', '2025-04-29 11:45:00', 1, 3],
        [17, 'Marchal', 'Lucie', 'lucie.marchal@example.com', password_hash('luciepassword567', PASSWORD_DEFAULT), '2024-09-15', '2025-04-30 14:20:00', 2, 4],
        [18, 'Faure', 'Victor', 'victor.faure@example.com', password_hash('victor456', PASSWORD_DEFAULT), '2022-07-30', '2025-04-29 10:00:00', 1, 1],
        [19, 'Lemoine', 'Éric', 'eric.lemoine@example.com', password_hash('eric7890', PASSWORD_DEFAULT), '2024-11-05', '2025-04-30 16:35:00', 3, 2],
        [20, 'Bourgeois', 'Claire', 'claire.bourgeois@example.com', password_hash('claire12345', PASSWORD_DEFAULT), '2023-04-02', '2025-04-30 17:30:00', 2, 3],
        [21, 'Leblanc', 'Michel', 'michel.leblanc@example.com', password_hash('michelpass001', PASSWORD_DEFAULT), '2024-03-17', '2025-04-30 09:40:00', 1, 1],
        [22, 'Dufresne', 'Élise', 'elise.dufresne@example.com', password_hash('elise45678', PASSWORD_DEFAULT), '2023-06-27', '2025-04-29 18:50:00', 2, 4],
        [23, 'Meyer', 'David', 'david.meyer@example.com', password_hash('meyerpass234', PASSWORD_DEFAULT), '2024-08-16', '2025-04-30 13:25:00', 3, 2],
        [24, 'Robert', 'Christine', 'christine.robert@example.com', password_hash('christine1234', PASSWORD_DEFAULT), '2023-11-11', '2025-04-28 16:10:00', 1, 3],
        [25, 'Bardin', 'Thomas', 'thomas.bardin@example.com', password_hash('thomaspass567', PASSWORD_DEFAULT), '2023-02-01', '2025-04-29 14:00:00', 2, 4],
        [26, 'Lecomte', 'Valérie', 'valerie.lecomte@example.com', password_hash('valeriepass001', PASSWORD_DEFAULT), '2024-06-04', '2025-04-30 15:50:00', 1, 1],
        [27, 'Blanc', 'Gérard', 'gerard.blanc@example.com', password_hash('gerard7890', PASSWORD_DEFAULT), '2023-09-11', '2025-04-30 17:10:00', 2, 3],
        [28, 'Valente', 'Sébastien', 'sebastien.valente@example.com', password_hash('valente12345', PASSWORD_DEFAULT), '2024-12-20', '2025-04-30 14:55:00', 3, 2],
        [29, 'Francois', 'Anne', 'anne.francois@example.com', password_hash('annepass5678', PASSWORD_DEFAULT), '2023-01-09', '2025-04-29 19:10:00', 1, 4],
        [30, 'Perrier', 'François', 'francois.perrier@example.com', password_hash('francois789', PASSWORD_DEFAULT), '2024-10-03', '2025-04-30 10:45:00', 2, 1],
        [31, 'Charbonnier', 'Luc', 'luc.charbonnier@example.com', password_hash('lucpassword234', PASSWORD_DEFAULT), '2023-12-15', '2025-04-30 12:50:00', 1, 2],
        [32, 'Galliard', 'Isabelle', 'isabelle.galliard@example.com', password_hash('galliardpass001', PASSWORD_DEFAULT), '2023-07-07', '2025-04-29 16:15:00', 3, 3],
        [33, 'Beaufort', 'Bernard', 'bernard.beaufort@example.com', password_hash('beaufort1234', PASSWORD_DEFAULT), '2024-05-11', '2025-04-30 11:30:00', 2, 4],
        [34, 'Olivier', 'Sophie', 'sophie.olivier@example.com', password_hash('sophie123', PASSWORD_DEFAULT), '2023-06-13', '2025-04-29 15:40:00', 1, 2],
        [35, 'Dubois', 'Éric', 'eric.dubois@example.com', password_hash('ericsecure123', PASSWORD_DEFAULT), '2024-03-24', '2025-04-30 09:30:00', 3, 1],
        [36, 'Fournier', 'Carole', 'carole.fournier@example.com', password_hash('fournierpassword', PASSWORD_DEFAULT), '2024-02-18', '2025-04-30 10:25:00', 2, 2],
        [37, 'Boucher', 'Hélène', 'helene.boucher@example.com', password_hash('helene123', PASSWORD_DEFAULT), '2022-11-15', '2025-04-30 14:40:00', 1, 3],
        [38, 'Giraud', 'Laurent', 'laurent.giraud@example.com', password_hash('laurentsecure789', PASSWORD_DEFAULT), '2023-10-08', '2025-04-29 11:15:00', 3, 4],
        [39, 'Schmitt', 'Julie', 'julie.schmitt@example.com', password_hash('schmitt12345', PASSWORD_DEFAULT), '2024-09-05', '2025-04-30 12:10:00', 2, 1],
        [40, 'Dumas', 'Paul', 'paul.dumas@example.com', password_hash('paul7890', PASSWORD_DEFAULT), '2023-12-01', '2025-04-30 13:55:00', 1, 2],
        [41, 'Zhang', 'Yue', 'yue.zhang@example.com', password_hash('yuepass5678', PASSWORD_DEFAULT), '2024-07-30', '2025-04-29 14:30:00', 2, 3],
        [42, 'Joubert', 'Michel', 'michel.joubert@example.com', password_hash('joubert1234', PASSWORD_DEFAULT), '2023-08-22', '2025-04-30 16:45:00', 3, 2],
        [43, 'Bélanger', 'Viviane', 'viviane.belanger@example.com', password_hash('belangerpassword789', PASSWORD_DEFAULT), '2024-02-10', '2025-04-30 18:00:00', 1, 1],
        [44, 'Laurent', 'Benoit', 'benoit.laurent@example.com', password_hash('laurent7891', PASSWORD_DEFAULT), '2023-11-25', '2025-04-29 09:20:00', 2, 3],
        [45, 'Savary', 'Bernadette', 'bernadette.savary@example.com', password_hash('savary1234', PASSWORD_DEFAULT), '2024-03-09', '2025-04-29 17:00:00', 3, 1],
        [46, 'Menard', 'Géraldine', 'geraldine.menard@example.com', password_hash('menardpassword001', PASSWORD_DEFAULT), '2023-12-17', '2025-04-30 10:05:00', 1, 2],
        [47, 'Collin', 'Franck', 'franck.collin@example.com', password_hash('collin12345', PASSWORD_DEFAULT), '2024-05-23', '2025-04-29 18:25:00', 2, 4],
        [48, 'Bisson', 'Véronique', 'veronique.bisson@example.com', password_hash('bisson5678', PASSWORD_DEFAULT), '2023-04-05', '2025-04-30 09:35:00', 1, 3],
        [49, 'Lemoine', 'Luc', 'luc.lemoine@example.com', password_hash('lucpassword123', PASSWORD_DEFAULT), '2024-12-19', '2025-04-30 12:50:00', 3, 2],
        [50, 'Royer', 'Arnaud', 'arnaud.royer@example.com', password_hash('royerpassword789', PASSWORD_DEFAULT), '2024-01-15', '2025-04-29 14:00:00', 2, 1]
    ];

    $stmt = $pdo->prepare("INSERT INTO User (user_id, last_name, first_name, email, password, registration_date, last_login, role_id, category_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    foreach ($users as $user) {
        $stmt->execute($user);
    }
}


function insertSchedule($pdo): void
{
    // Insert into Schedule table
    $schedules = [
        [1, '2025-04-01', '2025-04-01 09:00:00', '2025-04-01 12:00:00', 101, 1],
        [2, '2025-04-02', '2025-04-02 14:00:00', '2025-04-02 17:00:00', 102, 2]
        // Add other schedules...
    ];

    $stmt = $pdo->prepare("INSERT INTO Schedule (session_id, day, session_start, session_end, room, course_id) VALUES (?, ?, ?, ?, ?, ?)");
    foreach ($schedules as $schedule) {
        $stmt->execute($schedule);
    }
}

function insertRessource($pdo): void
{
    // Insert into Resource table
    $resources = [
        [1, 'math_course_2025.pdf', 'PDF', 'https://example.com/math_course_2025.pdf', '2025-04-01 10:00:00'],
        [2, 'physics_course_2025.docx', 'Word', 'https://example.com/physics_course_2025.docx', '2025-04-02 14:30:00']
        // Add other resources...
    ];

    $stmt = $pdo->prepare("INSERT INTO Resource (resource_id, file_name, file_type, file_link, upload_time) VALUES (?, ?, ?, ?, ?)");
    foreach ($resources as $resource) {
        $stmt->execute($resource);
    }
}

function insertClasse($pdo): void
{
    // Insert into Class table
    $classes = [
        [1, 'Class A', 'First Year', '2025-2026', 1],
        [2, 'Class B', 'Final Year', '2025-2026', 2]
    ];

    $stmt = $pdo->prepare("INSERT INTO Class (class_id, class_name, level, school_year, course_id) VALUES (?, ?, ?, ?, ?)");
    foreach ($classes as $class) {
        $stmt->execute($class);
    }
}

createTable($pdo);
insertCategory($pdo);
insertCategory($pdo);
insetRole($pdo);
insertCourse($pdo);
insertUser($pdo);
insertSchedule($pdo);
insertRessource($pdo);
insertClasse($pdo);