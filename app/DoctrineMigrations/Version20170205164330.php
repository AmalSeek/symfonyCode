<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170205164330 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE application CHANGE location location VARCHAR(255) DEFAULT NULL, CHANGE suggestion suggestion LONGTEXT DEFAULT NULL, CHANGE file_name file_name VARCHAR(255) DEFAULT NULL, CHANGE uploaded_at uploaded_at DATETIME DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE application CHANGE location location VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE suggestion suggestion LONGTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE file_name file_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE uploaded_at uploaded_at DATETIME NOT NULL');
    }
}
