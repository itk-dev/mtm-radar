<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180219135509 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE itkdev_setting (name VARCHAR(255) NOT NULL, section VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, form_type VARCHAR(255) DEFAULT NULL, value_string VARCHAR(255) DEFAULT NULL, value_text LONGTEXT DEFAULT NULL, value_datetime DATETIME DEFAULT NULL, value_integer INT DEFAULT NULL, value_boolean TINYINT(1) DEFAULT NULL, value_array LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json_array)\', PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE itkdev_setting');
    }
}
