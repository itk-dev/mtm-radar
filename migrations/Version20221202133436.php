<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221202133436 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE itkdev_setting MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON itkdev_setting');
        $this->addSql('ALTER TABLE itkdev_setting ADD name VARCHAR(255) NOT NULL, DROP id');
        $this->addSql('ALTER TABLE itkdev_setting ADD PRIMARY KEY (name)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE itkdev_setting ADD id INT AUTO_INCREMENT NOT NULL, DROP name, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }
}
