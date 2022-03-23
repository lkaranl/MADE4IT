SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
-- -----------------------------------------------------
-- Schema sgen_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sgen_db` DEFAULT CHARACTER SET utf8 ;

USE `sgen_db` ;

INSERT INTO `usuario` (`id`, `name`, `surname`, `cpf`, `birth`, `sex`, `city`, `state`, `cep`, `address`, `telephone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Karan Luciano', 'Silva', '001.013.862-78', '1992-08-06', 'Masculino', 'Jiparana', 'Rondonia', '78390-000', 'Rua adeildo', '69992370744', 'seguro@gmail.com', NULL, '$2y$10$4SqGLDH1x4e.W9cXNiks.OxrRZBpS2Zv7oOOcdMYMZr8PhUwvtX.m', NULL, '2021-05-06 00:46:52', '2021-05-06 00:46:52');
