<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
<<<<<<< HEAD:migrations/Version20220310012254.php
final class Version20220310012254 extends AbstractMigration
=======
final class Version20220310003147 extends AbstractMigration
>>>>>>> 920fc3e155be89e097721f4538a7a3ff289ff7ea:migrations/Version20220310003147.php
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
<<<<<<< HEAD:migrations/Version20220310012254.php
        $this->addSql('ALTER TABLE utilisateurs CHANGE age age VARCHAR(255) NOT NULL');
=======
        $this->addSql('ALTER TABLE boutique ADD latitude VARCHAR(255) NOT NULL, ADD longitude VARCHAR(255) NOT NULL');
>>>>>>> 920fc3e155be89e097721f4538a7a3ff289ff7ea:migrations/Version20220310003147.php
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
<<<<<<< HEAD:migrations/Version20220310012254.php
        $this->addSql('ALTER TABLE utilisateurs CHANGE age age VARCHAR(255) DEFAULT NULL');
=======
        $this->addSql('ALTER TABLE boutique DROP latitude, DROP longitude');
>>>>>>> 920fc3e155be89e097721f4538a7a3ff289ff7ea:migrations/Version20220310003147.php
    }
}
