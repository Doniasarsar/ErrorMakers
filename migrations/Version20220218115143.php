<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220218115143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE boutique DROP FOREIGN KEY FK_A1223C5483FA6DD0');
        $this->addSql('DROP INDEX UNIQ_A1223C5483FA6DD0 ON boutique');
        $this->addSql('ALTER TABLE boutique DROP commercant_id');
        $this->addSql('ALTER TABLE utilisateurs DROP FOREIGN KEY FK_497B315EAB677BE6');
        $this->addSql('DROP INDEX IDX_497B315EAB677BE6 ON utilisateurs');
        $this->addSql('ALTER TABLE utilisateurs DROP boutique_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE boutique ADD commercant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE boutique ADD CONSTRAINT FK_A1223C5483FA6DD0 FOREIGN KEY (commercant_id) REFERENCES utilisateurs (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A1223C5483FA6DD0 ON boutique (commercant_id)');
        $this->addSql('ALTER TABLE utilisateurs ADD boutique_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315EAB677BE6 FOREIGN KEY (boutique_id) REFERENCES boutique (id)');
        $this->addSql('CREATE INDEX IDX_497B315EAB677BE6 ON utilisateurs (boutique_id)');
    }
}
