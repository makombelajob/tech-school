<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250603144346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE classes (id INT AUTO_INCREMENT NOT NULL, class_name VARCHAR(50) NOT NULL, level INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE courses (id INT AUTO_INCREMENT NOT NULL, subjects_id INT NOT NULL, classes_id INT DEFAULT NULL, name VARCHAR(50) NOT NULL, coefficient NUMERIC(10, 2) NOT NULL, day VARCHAR(50) NOT NULL, started_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', end_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_A9A55A4C94AF957A (subjects_id), INDEX IDX_A9A55A4C9E225B24 (classes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE ressources (id INT AUTO_INCREMENT NOT NULL, file_name VARCHAR(50) NOT NULL, file_type VARCHAR(50) NOT NULL, uploaded_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE ressources_courses (ressources_id INT NOT NULL, courses_id INT NOT NULL, INDEX IDX_F799735C3C361826 (ressources_id), INDEX IDX_F799735CF9295384 (courses_id), PRIMARY KEY(ressources_id, courses_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE results (id INT AUTO_INCREMENT NOT NULL, courses_id INT DEFAULT NULL, users_id INT DEFAULT NULL, note INT NOT NULL, monthly INT NOT NULL, yearly INT NOT NULL, remark VARCHAR(1000) NOT NULL, INDEX IDX_9FA3E414F9295384 (courses_id), INDEX IDX_9FA3E41467B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE subjects (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, lastname VARCHAR(50) NOT NULL, firstname VARCHAR(50) NOT NULL, registered_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', last_login DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE users_classes (users_id INT NOT NULL, classes_id INT NOT NULL, INDEX IDX_F2ED0A0F67B3B43D (users_id), INDEX IDX_F2ED0A0F9E225B24 (classes_id), PRIMARY KEY(users_id, classes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE users_courses (users_id INT NOT NULL, courses_id INT NOT NULL, INDEX IDX_59A52E8667B3B43D (users_id), INDEX IDX_59A52E86F9295384 (courses_id), PRIMARY KEY(users_id, courses_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses ADD CONSTRAINT FK_A9A55A4C94AF957A FOREIGN KEY (subjects_id) REFERENCES subjects (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses ADD CONSTRAINT FK_A9A55A4C9E225B24 FOREIGN KEY (classes_id) REFERENCES classes (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources_courses ADD CONSTRAINT FK_F799735C3C361826 FOREIGN KEY (ressources_id) REFERENCES ressources (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources_courses ADD CONSTRAINT FK_F799735CF9295384 FOREIGN KEY (courses_id) REFERENCES courses (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE results ADD CONSTRAINT FK_9FA3E414F9295384 FOREIGN KEY (courses_id) REFERENCES courses (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE results ADD CONSTRAINT FK_9FA3E41467B3B43D FOREIGN KEY (users_id) REFERENCES users (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_classes ADD CONSTRAINT FK_F2ED0A0F67B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_classes ADD CONSTRAINT FK_F2ED0A0F9E225B24 FOREIGN KEY (classes_id) REFERENCES classes (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_courses ADD CONSTRAINT FK_59A52E8667B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_courses ADD CONSTRAINT FK_59A52E86F9295384 FOREIGN KEY (courses_id) REFERENCES courses (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE courses DROP FOREIGN KEY FK_A9A55A4C94AF957A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses DROP FOREIGN KEY FK_A9A55A4C9E225B24
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources_courses DROP FOREIGN KEY FK_F799735C3C361826
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources_courses DROP FOREIGN KEY FK_F799735CF9295384
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE results DROP FOREIGN KEY FK_9FA3E414F9295384
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE results DROP FOREIGN KEY FK_9FA3E41467B3B43D
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_classes DROP FOREIGN KEY FK_F2ED0A0F67B3B43D
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_classes DROP FOREIGN KEY FK_F2ED0A0F9E225B24
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_courses DROP FOREIGN KEY FK_59A52E8667B3B43D
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users_courses DROP FOREIGN KEY FK_59A52E86F9295384
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE classes
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE courses
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE ressources
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE ressources_courses
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE results
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE subjects
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE users
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE users_classes
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE users_courses
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}
