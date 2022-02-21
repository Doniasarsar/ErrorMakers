<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220220210301 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE boutique ADD image_pdp_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE boutique ADD CONSTRAINT FK_A1223C548B709F99 FOREIGN KEY (image_pdp_id) REFERENCES images_pdp (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A1223C548B709F99 ON boutique (image_pdp_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE boutique DROP FOREIGN KEY FK_A1223C548B709F99');
        $this->addSql('DROP INDEX UNIQ_A1223C548B709F99 ON boutique');
        $this->addSql('ALTER TABLE boutique DROP image_pdp_id');
    }
}
