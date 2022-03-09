<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
<<<<<<< HEAD:migrations/Version20220309193456.php
final class Version20220309193456 extends AbstractMigration
=======
final class Version20220309195020 extends AbstractMigration
>>>>>>> d36f7e8c620a7e5e2ae49290f8a15ab107743c5e:migrations/Version20220309195020.php
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
<<<<<<< HEAD:migrations/Version20220309193456.php
        $this->addSql('ALTER TABLE utilisateurs ADD age VARCHAR(255) NOT NULL');
=======
        $this->addSql('ALTER TABLE utilisateurs CHANGE telephone telephone VARCHAR(255) NOT NULL');
>>>>>>> d36f7e8c620a7e5e2ae49290f8a15ab107743c5e:migrations/Version20220309195020.php
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
<<<<<<< HEAD:migrations/Version20220309193456.php
        $this->addSql('ALTER TABLE utilisateurs DROP age');
=======
        $this->addSql('ALTER TABLE utilisateurs CHANGE telephone telephone INT NOT NULL');
>>>>>>> d36f7e8c620a7e5e2ae49290f8a15ab107743c5e:migrations/Version20220309195020.php
    }
}
