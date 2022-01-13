DROP SCHEMA IF EXISTS Motivos;
CREATE DATABASE IF NOT EXISTS Motivos;
USE Motivos;

--
-- Table structure for table `cessacao`
--
CREATE TABLE `cessacao` (
  `id_cessacao` INT(11) NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `conc_final` VARCHAR(255) NOT NULL,
  `prisma_sabi` VARCHAR(255) NOT NULL,
  `reatnb_plenus` VARCHAR(255) NOT NULL,
  `situacao` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_cessacao`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Table structure for table `suspensao`
--
CREATE TABLE `suspensao` (
  `id_suspensao` INT(11) NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `conc_final` VARCHAR(255) NOT NULL,
  `prisma_sabi` VARCHAR(255) NOT NULL,
  `reatnb_plenus` VARCHAR(255) NOT NULL,
  `situacao` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_suspensao`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Table structure for table `reativacao`
--
CREATE TABLE `reativacao` (
  `id_reativacao` INT(11) NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_reativacao`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;
