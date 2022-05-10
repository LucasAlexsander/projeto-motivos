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

--
-- Table structure for table `users`
--
CREATE TABLE `users` (
	`id_users` INT(11) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(50) NOT NULL,
	`email` VARCHAR(50) NOT NULL,
	`senha` VARCHAR(255) NOT NULL,
	`profile_type` INT(1) NOT NULL DEFAULT '0',
	`SIAPE` INT(12) NOT NULL,
	PRIMARY KEY (`id_users`),
	UNIQUE INDEX `email` (`email`),
	UNIQUE INDEX `SIAPE_2` (`SIAPE`),
	INDEX `SIAPE` (`SIAPE`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;
