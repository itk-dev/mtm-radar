<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221201143404 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE answer (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', survey_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', name VARCHAR(255) NOT NULL, company VARCHAR(255) DEFAULT NULL, address LONGTEXT DEFAULT NULL, documentation_id VARCHAR(255) DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, replies LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', data LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_DADD4A25B3FE509D (survey_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE itkdev_setting (id INT AUTO_INCREMENT NOT NULL, description LONGTEXT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, form_type VARCHAR(255) DEFAULT NULL, value VARCHAR(255) DEFAULT NULL, value_text LONGTEXT DEFAULT NULL, value_date_time DATETIME DEFAULT NULL, value_integer INT DEFAULT NULL, value_boolean INT DEFAULT NULL, value_array LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', survey_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', rank INT NOT NULL, category VARCHAR(255) DEFAULT NULL, title VARCHAR(255) NOT NULL, text LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_B6F7494EB3FE509D (survey_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE survey (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, instructions LONGTEXT DEFAULT NULL, preparations LONGTEXT DEFAULT NULL, configuration LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE answer ADD CONSTRAINT FK_DADD4A25B3FE509D FOREIGN KEY (survey_id) REFERENCES survey (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EB3FE509D FOREIGN KEY (survey_id) REFERENCES survey (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE answer DROP FOREIGN KEY FK_DADD4A25B3FE509D');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EB3FE509D');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE answer');
        $this->addSql('DROP TABLE itkdev_setting');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE survey');
        $this->addSql('DROP TABLE user');
    }
}
