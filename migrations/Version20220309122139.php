<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220309122139 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment_like (id INT AUTO_INCREMENT NOT NULL, comment_id INT DEFAULT NULL, utilisateur_id INT DEFAULT NULL, INDEX IDX_8A55E25FF8697D13 (comment_id), INDEX IDX_8A55E25FFB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment_like ADD CONSTRAINT FK_8A55E25FF8697D13 FOREIGN KEY (comment_id) REFERENCES commentaires (id)');
        $this->addSql('ALTER TABLE comment_like ADD CONSTRAINT FK_8A55E25FFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE commande ADD latitude VARCHAR(255) NOT NULL, ADD longitude VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE comment_like');
        $this->addSql('ALTER TABLE commande DROP latitude, DROP longitude');
    }
}
