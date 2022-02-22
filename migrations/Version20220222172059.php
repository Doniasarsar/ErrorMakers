<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220222172059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule ADD livreur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DF8646701 FOREIGN KEY (livreur_id) REFERENCES utilisateurs (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1DF8646701 ON vehicule (livreur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DF8646701');
        $this->addSql('DROP INDEX IDX_292FFF1DF8646701 ON vehicule');
        $this->addSql('ALTER TABLE vehicule DROP livreur_id');
    }
}
