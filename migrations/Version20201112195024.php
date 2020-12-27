<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201112195024 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artists_artwork (id INT AUTO_INCREMENT NOT NULL, title_id INT DEFAULT NULL, matiere_id INT DEFAULT NULL, dimension_id INT DEFAULT NULL, date_of_work_id INT DEFAULT NULL, material VARCHAR(255) NOT NULL, INDEX IDX_2098BFEDA9F87BD (title_id), INDEX IDX_2098BFEDF46CD258 (matiere_id), INDEX IDX_2098BFED277428AD (dimension_id), INDEX IDX_2098BFED8A72A3CC (date_of_work_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE artists_artwork ADD CONSTRAINT FK_2098BFEDA9F87BD FOREIGN KEY (title_id) REFERENCES artists_detail (id)');
        $this->addSql('ALTER TABLE artists_artwork ADD CONSTRAINT FK_2098BFEDF46CD258 FOREIGN KEY (matiere_id) REFERENCES artists_detail (id)');
        $this->addSql('ALTER TABLE artists_artwork ADD CONSTRAINT FK_2098BFED277428AD FOREIGN KEY (dimension_id) REFERENCES artists_detail (id)');
        $this->addSql('ALTER TABLE artists_artwork ADD CONSTRAINT FK_2098BFED8A72A3CC FOREIGN KEY (date_of_work_id) REFERENCES artists_detail (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE artists_artwork');
    }
}
