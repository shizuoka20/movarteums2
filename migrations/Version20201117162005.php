<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201117162005 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artist (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone INT NOT NULL, artist_email VARCHAR(255) NOT NULL, date_of_birth DATETIME NOT NULL, website VARCHAR(255) NOT NULL, social_media VARCHAR(255) NOT NULL, home_adress VARCHAR(255) NOT NULL, shipping_adress VARCHAR(255) NOT NULL, image_profile VARCHAR(255) NOT NULL, nationality VARCHAR(255) NOT NULL, number_of_work INT NOT NULL, introduction_artist LONGTEXT NOT NULL, number_of_work_for_sale INT NOT NULL, image_work_one VARCHAR(255) NOT NULL, year_work_one DATETIME NOT NULL, price_one INT NOT NULL, introduction_work_one LONGTEXT NOT NULL, material_one VARCHAR(255) NOT NULL, dimension_one VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE artiste (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone INT NOT NULL, date_of_birth INT NOT NULL, website VARCHAR(255) NOT NULL, social_media VARCHAR(255) NOT NULL, home_adress VARCHAR(255) NOT NULL, shipping_adress VARCHAR(255) NOT NULL, image_profile VARCHAR(255) NOT NULL, nationality VARCHAR(255) NOT NULL, introduction_artist LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE artists_artwork ADD material VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE artist');
        $this->addSql('DROP TABLE artiste');
        $this->addSql('ALTER TABLE artists_artwork DROP material');
    }
}
