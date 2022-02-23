<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220223121715 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE boutique (id INT AUTO_INCREMENT NOT NULL, commercant_id INT DEFAULT NULL, nom_boutique VARCHAR(255) NOT NULL, desc_boutique VARCHAR(255) NOT NULL, adresse_boutique VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_A1223C5483FA6DD0 (commercant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, nom_client VARCHAR(255) NOT NULL, prenom_client VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, postcode VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, montant VARCHAR(255) NOT NULL, date_commande DATE NOT NULL, etat_commande INT NOT NULL, mode_paiemenet VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demandes (id INT AUTO_INCREMENT NOT NULL, boutique_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, password VARCHAR(255) NOT NULL, role LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', question_securite1 VARCHAR(255) NOT NULL, question_securite2 VARCHAR(255) NOT NULL, etat VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_BD940CBBAB677BE6 (boutique_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, boutique_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_E01FBE6AAB677BE6 (boutique_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, produit_id INT DEFAULT NULL, commande_id INT DEFAULT NULL, quantite INT NOT NULL, INDEX IDX_3170B74BF347EFB (produit_id), INDEX IDX_3170B74B82EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, num_livraison INT NOT NULL, etat_livraison VARCHAR(255) NOT NULL, date_livraison DATETIME NOT NULL, id_livreur INT NOT NULL, id_livraison INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraisons (id INT AUTO_INCREMENT NOT NULL, utilisateurs_id INT DEFAULT NULL, date_sortie DATE NOT NULL, date_arrive DATE NOT NULL, etat VARCHAR(255) NOT NULL, INDEX IDX_96A0CE611E969C5 (utilisateurs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, prix_produit DOUBLE PRECISION NOT NULL, quantite_produit INT NOT NULL, desc_produit VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, nom_produit VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, boutique_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, password VARCHAR(255) NOT NULL, role LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', question_securite1 VARCHAR(255) NOT NULL, question_securite2 VARCHAR(255) NOT NULL, etat VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_497B315EAB677BE6 (boutique_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE boutique ADD CONSTRAINT FK_A1223C5483FA6DD0 FOREIGN KEY (commercant_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE demandes ADD CONSTRAINT FK_BD940CBBAB677BE6 FOREIGN KEY (boutique_id) REFERENCES boutique (id)');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6AAB677BE6 FOREIGN KEY (boutique_id) REFERENCES boutique (id)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74BF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE livraisons ADD CONSTRAINT FK_96A0CE611E969C5 FOREIGN KEY (utilisateurs_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315EAB677BE6 FOREIGN KEY (boutique_id) REFERENCES boutique (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demandes DROP FOREIGN KEY FK_BD940CBBAB677BE6');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6AAB677BE6');
        $this->addSql('ALTER TABLE utilisateurs DROP FOREIGN KEY FK_497B315EAB677BE6');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74B82EA2E54');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74BF347EFB');
        $this->addSql('ALTER TABLE boutique DROP FOREIGN KEY FK_A1223C5483FA6DD0');
        $this->addSql('ALTER TABLE livraisons DROP FOREIGN KEY FK_96A0CE611E969C5');
        $this->addSql('DROP TABLE boutique');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE demandes');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE ligne_commande');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE livraisons');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE utilisateurs');
    }
}
