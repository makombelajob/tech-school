CREATE TABLE students (
    Id_Student BIGINT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE teachers (
    Id_Teacher BIGINT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE categories (
    Id_Category BIGINT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL
);

CREATE TABLE courses (
    Id_Course BIGINT PRIMARY KEY  AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
    Hours VARCHAR(50) NOT NULL,
    Id_Category BIGINT,
    Id_Teacher BIGINT,
    FOREIGN KEY (Id_Category) REFERENCES categories(Id_Category),
    FOREIGN KEY (Id_Teacher) REFERENCES teachers(Id_Teacher)
);

CREATE TABLE learn (
    Id_Student BIGINT,
    Id_Course BIGINT,
    FOREIGN KEY (Id_Student) REFERENCES students(Id_Student),
    FOREIGN KEY (Id_Course) REFERENCES courses(Id_Course)
);
