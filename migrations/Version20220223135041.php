<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220223135041 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, livreur_id INT DEFAULT NULL, matricule VARCHAR(255) NOT NULL, couleur VARCHAR(255) NOT NULL, type_vehicule VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, date_entretient DATETIME NOT NULL, etat_vehicule VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_292FFF1DF8646701 (livreur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DF8646701 FOREIGN KEY (livreur_id) REFERENCES utilisateurs (id)');
        $this->addSql('DROP TABLE livraisons');
        $this->addSql('ALTER TABLE livraison ADD livreur_id INT DEFAULT NULL, ADD commande_id INT DEFAULT NULL, ADD vehicule_id INT DEFAULT NULL, ADD prix_livraison DOUBLE PRECISION NOT NULL, DROP num_livraison, DROP id_livreur, DROP id_livraison');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1FF8646701 FOREIGN KEY (livreur_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F4A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id)');
        $this->addSql('CREATE INDEX IDX_A60C9F1FF8646701 ON livraison (livreur_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A60C9F1F82EA2E54 ON livraison (commande_id)');
        $this->addSql('CREATE INDEX IDX_A60C9F1F4A4A3511 ON livraison (vehicule_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F4A4A3511');
        $this->addSql('CREATE TABLE livraisons (id INT AUTO_INCREMENT NOT NULL, utilisateurs_id INT DEFAULT NULL, date_sortie DATE NOT NULL, date_arrive DATE NOT NULL, etat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_96A0CE611E969C5 (utilisateurs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE livraisons ADD CONSTRAINT FK_96A0CE611E969C5 FOREIGN KEY (utilisateurs_id) REFERENCES utilisateurs (id)');
        $this->addSql('DROP TABLE vehicule');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1FF8646701');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F82EA2E54');
        $this->addSql('DROP INDEX IDX_A60C9F1FF8646701 ON livraison');
        $this->addSql('DROP INDEX UNIQ_A60C9F1F82EA2E54 ON livraison');
        $this->addSql('DROP INDEX IDX_A60C9F1F4A4A3511 ON livraison');
        $this->addSql('ALTER TABLE livraison ADD num_livraison INT NOT NULL, ADD id_livreur INT NOT NULL, ADD id_livraison INT NOT NULL, DROP livreur_id, DROP commande_id, DROP vehicule_id, DROP prix_livraison');
    }
}
