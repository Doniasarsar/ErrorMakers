<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220221114041 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateurs ADD question_securite1 VARCHAR(255) NOT NULL, ADD question_securite2 VARCHAR(255) NOT NULL, ADD etat VARCHAR(255) NOT NULL, DROP token');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateurs ADD token VARCHAR(50) DEFAULT NULL, DROP question_securite1, DROP question_securite2, DROP etat');
    }
}
