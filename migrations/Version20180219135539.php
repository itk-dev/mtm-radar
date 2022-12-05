<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180219135539 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql("INSERT INTO itkdev_setting(section, name, type, form_type, value_string) VALUES ('cms', 'frontpage_title', 'string', 'text', '')");
        $this->addSql("INSERT INTO itkdev_setting(section, name, type, form_type, value_text) VALUES ('cms', 'frontpage_content', 'text', 'ckeditor', '')");
        $this->addSql("INSERT INTO itkdev_setting(section, name, type, form_type, value_text) VALUES ('cms', 'page_footer', 'string', 'text', '')");
    }

    public function down(Schema $schema): void
    {
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql("DELETE FROM itkdev_setting WHERE name = 'page_footer'");
        $this->addSql("DELETE FROM itkdev_setting WHERE name = 'frontpage_content'");
        $this->addSql("DELETE FROM itkdev_setting WHERE name = 'frontpage_title'");
    }
}
