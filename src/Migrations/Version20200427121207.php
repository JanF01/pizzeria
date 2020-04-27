<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200427121207 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ddd_menu_piza (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE ddd_menu_dania');
        $this->addSql('DROP TABLE ddd_menu_dodatki');
        $this->addSql('DROP TABLE ddd_menu_inne');
        $this->addSql('DROP TABLE ddd_menu_lasagne');
        $this->addSql('DROP TABLE ddd_menu_pieczywo');
        $this->addSql('DROP TABLE ddd_menu_pizza_groups');
        $this->addSql('DROP TABLE ddd_menu_promocje');
        $this->addSql('DROP TABLE ddd_menu_salads');
        $this->addSql('DROP TABLE ddd_menu_tortilla');
        $this->addSql('ALTER TABLE ddd_menu_pizza CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE groupid groupid INT DEFAULT NULL, CHANGE name name VARCHAR(64) DEFAULT NULL, CHANGE sprice sprice DOUBLE PRECISION DEFAULT NULL, CHANGE mprice mprice DOUBLE PRECISION DEFAULT NULL, CHANGE lprice lprice DOUBLE PRECISION DEFAULT NULL, CHANGE public public SMALLINT NOT NULL, CHANGE dodal dodal VARCHAR(50) NOT NULL, CHANGE foto foto VARCHAR(150) DEFAULT NULL, CHANGE part part VARCHAR(1) DEFAULT NULL, CHANGE papryczki papryczki SMALLINT NOT NULL, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ddd_menu_dania (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(64) CHARACTER SET utf8 DEFAULT \'\'\'\'\'\' NOT NULL COLLATE `utf8_general_ci`, price DOUBLE PRECISION DEFAULT \'0\' NOT NULL, public TINYINT(1) DEFAULT \'1\' NOT NULL, dodal VARCHAR(50) CHARACTER SET utf8 DEFAULT \'\'\'admin\'\'\' NOT NULL COLLATE `utf8_general_ci`, description TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, foto VARCHAR(150) CHARACTER SET utf8 DEFAULT \'\'\'\'\'\' NOT NULL COLLATE `utf8_general_ci`, kat INT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ddd_menu_dodatki (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, price DOUBLE PRECISION UNSIGNED DEFAULT \'NULL\', public TINYINT(1) DEFAULT \'1\' NOT NULL, dodal VARCHAR(50) CHARACTER SET utf8 DEFAULT \'\'\'admin\'\'\' NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ddd_menu_inne (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, price DOUBLE PRECISION UNSIGNED DEFAULT \'NULL\', public TINYINT(1) DEFAULT \'1\' NOT NULL, dodal VARCHAR(50) CHARACTER SET utf8 DEFAULT \'\'\'admin\'\'\' NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ddd_menu_lasagne (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(64) CHARACTER SET utf8 DEFAULT \'\'\'\'\'\' NOT NULL COLLATE `utf8_general_ci`, price DOUBLE PRECISION DEFAULT \'0\' NOT NULL, public TINYINT(1) DEFAULT \'1\' NOT NULL, dodal VARCHAR(50) CHARACTER SET utf8 DEFAULT \'\'\'admin\'\'\' NOT NULL COLLATE `utf8_general_ci`, description TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, foto VARCHAR(150) CHARACTER SET utf8 DEFAULT \'\'\'\'\'\' NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ddd_menu_pieczywo (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, price DOUBLE PRECISION UNSIGNED DEFAULT \'NULL\', public TINYINT(1) DEFAULT \'1\' NOT NULL, dodal VARCHAR(50) CHARACTER SET utf8 DEFAULT \'\'\'admin\'\'\' NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ddd_menu_pizza_groups (id TINYINT(1) NOT NULL, name VARCHAR(64) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, seqbycolor TINYINT(1) DEFAULT \'NULL\', public TINYINT(1) DEFAULT \'1\' NOT NULL, dodal VARCHAR(50) CHARACTER SET utf8 DEFAULT \'\'\'admin\'\'\' NOT NULL COLLATE `utf8_general_ci`, kol INT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ddd_menu_promocje (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, price DOUBLE PRECISION UNSIGNED DEFAULT \'NULL\', public TINYINT(1) DEFAULT \'1\' NOT NULL, dodal VARCHAR(50) CHARACTER SET utf8 DEFAULT \'\'\'admin\'\'\' NOT NULL COLLATE `utf8_general_ci`, foto VARCHAR(150) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, description TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, data INT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ddd_menu_salads (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(64) CHARACTER SET utf8 DEFAULT \'\'\'\'\'\' NOT NULL COLLATE `utf8_general_ci`, price DOUBLE PRECISION DEFAULT \'0\' NOT NULL, public TINYINT(1) DEFAULT \'1\' NOT NULL, dodal VARCHAR(50) CHARACTER SET utf8 DEFAULT \'\'\'admin\'\'\' NOT NULL COLLATE `utf8_general_ci`, description TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, foto VARCHAR(150) CHARACTER SET utf8 DEFAULT \'\'\'\'\'\' NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ddd_menu_tortilla (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(64) CHARACTER SET utf8 DEFAULT \'\'\'\'\'\' NOT NULL COLLATE `utf8_general_ci`, price DOUBLE PRECISION DEFAULT \'0\' NOT NULL, public TINYINT(1) DEFAULT \'1\' NOT NULL, dodal VARCHAR(50) CHARACTER SET utf8 DEFAULT \'\'\'admin\'\'\' NOT NULL COLLATE `utf8_general_ci`, description TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, foto VARCHAR(150) CHARACTER SET utf8 DEFAULT \'\'\'\'\'\' NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE ddd_menu_piza');
        $this->addSql('ALTER TABLE ddd_menu_pizza MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE ddd_menu_pizza DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE ddd_menu_pizza CHANGE id id INT DEFAULT 0 NOT NULL, CHANGE groupid groupid INT DEFAULT NULL, CHANGE name name VARCHAR(64) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, CHANGE sprice sprice DOUBLE PRECISION UNSIGNED DEFAULT \'NULL\', CHANGE mprice mprice DOUBLE PRECISION UNSIGNED DEFAULT \'NULL\', CHANGE lprice lprice DOUBLE PRECISION UNSIGNED DEFAULT \'NULL\', CHANGE public public TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE dodal dodal VARCHAR(50) CHARACTER SET utf8 DEFAULT \'\'\'admin\'\'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE foto foto VARCHAR(150) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, CHANGE part part CHAR(1) CHARACTER SET utf8 DEFAULT \'\'\'\'\'\' COLLATE `utf8_general_ci`, CHANGE papryczki papryczki TINYINT(1) DEFAULT \'0\' NOT NULL');
    }
}
