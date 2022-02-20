<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220218110129 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, boutique_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, password VARCHAR(255) NOT NULL, role LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', token VARCHAR(50) DEFAULT NULL, INDEX IDX_497B315EAB677BE6 (boutique_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315EAB677BE6 FOREIGN KEY (boutique_id) REFERENCES boutique (id)');
        $this->addSql('ALTER TABLE boutique ADD commercant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE boutique ADD CONSTRAINT FK_A1223C5483FA6DD0 FOREIGN KEY (commercant_id) REFERENCES utilisateurs (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A1223C5483FA6DD0 ON boutique (commercant_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE boutique DROP FOREIGN KEY FK_A1223C5483FA6DD0');
        $this->addSql('DROP TABLE utilisateurs');
        $this->addSql('DROP INDEX UNIQ_A1223C5483FA6DD0 ON boutique');
        $this->addSql('ALTER TABLE boutique DROP commercant_id');
    }
}
