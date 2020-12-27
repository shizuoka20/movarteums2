<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201117171123 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artiste_travaux (id INT AUTO_INCREMENT NOT NULL, image_work_one VARCHAR(255) NOT NULL, title_work_one VARCHAR(255) NOT NULL, year_work_one DATETIME NOT NULL, price_one INT NOT NULL, introduction_work_one LONGTEXT NOT NULL, material_one VARCHAR(255) NOT NULL, material_one_correct VARCHAR(255) NOT NULL, dimension_one VARCHAR(255) NOT NULL, image_work_two VARCHAR(255) NOT NULL, title_work_two VARCHAR(255) NOT NULL, year_work_two DATETIME NOT NULL, price_two INT NOT NULL, introduction_work_two LONGTEXT NOT NULL, material_two VARCHAR(255) NOT NULL, dimension_two VARCHAR(255) NOT NULL, image_work_three VARCHAR(255) NOT NULL, title_work_three VARCHAR(255) NOT NULL, year_work_three DATETIME NOT NULL, price_three INT NOT NULL, introduction_workthree LONGTEXT NOT NULL, material_three VARCHAR(255) NOT NULL, dimension_three VARCHAR(255) NOT NULL, image_work_four VARCHAR(255) NOT NULL, title_work_four VARCHAR(255) NOT NULL, year_work_four DATETIME NOT NULL, price_four INT NOT NULL, introduction_work_four LONGTEXT NOT NULL, material_four VARCHAR(255) NOT NULL, dimension_four VARCHAR(255) NOT NULL, image_work_five VARCHAR(255) NOT NULL, title_work_five VARCHAR(255) NOT NULL, year_work_five DATETIME NOT NULL, price_five INT NOT NULL, introduction_work_five LONGTEXT NOT NULL, material_five VARCHAR(255) NOT NULL, dimension_five VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE artiste_travaux');
    }
}
