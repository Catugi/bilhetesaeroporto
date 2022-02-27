SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS,
  UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS,
  FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE,
  SQL_MODE = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
DROP SCHEMA IF EXISTS `aeroporto`;
CREATE SCHEMA IF NOT EXISTS `aeroporto` DEFAULT CHARACTER SET utf8;
USE `aeroporto`;
DROP TABLE IF EXISTS `aeroporto`.`funcionario`;
CREATE TABLE IF NOT EXISTS `aeroporto`.`funcionario` (
  `idfuncionario` INT NOT NULL,
  `primeiro_nome` VARCHAR(45) NULL,
  `ultimo_nome` VARCHAR(45) NULL,
  `data_nascimento` VARCHAR(10) NULL,
  `bilhete_id` VARCHAR(15) NULL,
  `cargo` VARCHAR(45) NULL,
  `morada` VARCHAR(45) NULL,
  `genero` VARCHAR(10) NULL,
  `email` VARCHAR(45) NULL,
  `telefone_principal` VARCHAR(13) NULL,
  `telefone_alternativo` VARCHAR(13) NULL,
  `nome_usuario` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`idfuncionario`)
) ENGINE = InnoDB;
DROP TABLE IF EXISTS `aeroporto`.`cliente`;
CREATE TABLE IF NOT EXISTS `aeroporto`.`cliente` (
  `idcliente` INT NOT NULL,
  `primeiro_nome` VARCHAR(45) NULL,
  `ultimo_nome` VARCHAR(45) NULL,
  `data_nascimento` VARCHAR(10) NULL,
  `bilhete_id` VARCHAR(15) NULL,
  `genero` VARCHAR(10) NULL,
  `email` VARCHAR(45) NULL,
  `telefone` VARCHAR(10) NULL,
  `motivo_viagem` VARCHAR(10) NULL,
  `voo` VARCHAR(10) NULL,
  `assento` INT NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE = InnoDB;
DROP TABLE IF EXISTS `aeroporto`.`aeronave`;
CREATE TABLE IF NOT EXISTS `aeroporto`.`aeronave` (
  `idaeronave` INT NOT NULL,
  `modelo` VARCHAR(45) NULL,
  `codinome` VARCHAR(45) NULL,
  `data_fabrica` VARCHAR(45) NULL,
  `empresa_fabica` VARCHAR(45) NULL,
  `lotacao` INT NULL,
  `porte` VARCHAR(45) NULL,
  PRIMARY KEY (`idaeronave`)
) ENGINE = InnoDB;
DROP TABLE IF EXISTS `aeroporto`.`voo`;
CREATE TABLE IF NOT EXISTS `aeroporto`.`voo` (
  `idvoo` INT NOT NULL,
  `fonte` VARCHAR(45) NULL,
  `destino` VARCHAR(45) NULL,
  `data_voo` VARCHAR(10) NULL,
  `hora_partida` VARCHAR(10) NULL,
  `hora_prevista_chegada` VARCHAR(10) NULL,
  `aeronave` VARCHAR(45) NULL,
  `num_passageiros` VARCHAR(45) NULL,
  `piloto` VARCHAR(45) NULL,
  PRIMARY KEY (`idvoo`)
) ENGINE = InnoDB;
USE `aeroporto`;
USE `aeroporto`;
DELIMITER $$ USE `aeroporto` $$$$ DELIMITER;
SET SQL_MODE = @OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;