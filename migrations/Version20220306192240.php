<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306192240 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE note (id INT AUTO_INCREMENT NOT NULL, evenement_id INT DEFAULT NULL, note DOUBLE PRECISION DEFAULT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_CFBDFA14FD02F13 (evenement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE produit ADD boutique_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27AB677BE6 FOREIGN KEY (boutique_id) REFERENCES boutique (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC27AB677BE6 ON produit (boutique_id)');
        $this->addSql('ALTER TABLE reclamation ADD commande_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640482EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('CREATE INDEX IDX_CE60640482EA2E54 ON reclamation (commande_id)');
        $this->addSql('ALTER TABLE utilisateurs ADD image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE note');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27AB677BE6');
        $this->addSql('DROP INDEX IDX_29A5EC27AB677BE6 ON produit');
        $this->addSql('ALTER TABLE produit DROP boutique_id');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640482EA2E54');
        $this->addSql('DROP INDEX IDX_CE60640482EA2E54 ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP commande_id');
        $this->addSql('ALTER TABLE utilisateurs DROP image');
    }
}
