<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221202140829 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE survey CHANGE configuration configuration LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE answer CHANGE replies replies LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE itkdev_setting CHANGE value_array value_array LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\'');


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE survey CHANGE configuration configuration LONGTEXT NOT NULL COMMENT \'(DC2Type:json_array)\'');
        $this->addSql('ALTER TABLE answer CHANGE replies replies LONGTEXT NOT NULL COMMENT \'(DC2Type:json_array)\'');
        $this->addSql('ALTER TABLE itkdev_setting CHANGE value_array value_array LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json_array)\'');
        // $this->addSql('ALTER TABLE answer (replies LONGTEXT NOT NULL COMMENT \'(DC2Type:json_array)\')');
    }
}
