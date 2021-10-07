-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema panaderia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema panaderia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `panaderia` DEFAULT CHARACTER SET utf8 ;
USE `panaderia` ;

-- -----------------------------------------------------
-- Table `panaderia`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `panaderia`.`productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(100) NOT NULL,
  `precio` FLOAT(4,2) NOT NULL,
  `stock` VARCHAR(20) NOT NULL,
  `imagen` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- Selecionamos la base de datos
USE panaderia;

-- Seleccionamos la tabla productos
SELECT * FROM productos;

-- Rellenamos la base de datos con algunos productos
INSERT INTO productos (id, nombre, descripcion, precio, stock) VALUES (NULL, 'Pastel', '150g. de calorias', '15.23', '10');
INSERT INTO productos (id, nombre, descripcion, precio, stock) VALUES (NULL, 'Pastel de fresa', '110g. de calorias', '25.50', '15');
INSERT INTO productos (id, nombre, descripcion, precio, stock) VALUES (NULL, 'Tarta de frambuesa', '100g. de calorias', '35.20', '8');
INSERT INTO productos (id, nombre, descripcion, precio, stock) VALUES (NULL, 'Pastel de nuez', '200g. de calorias', '50.25', '10');

-- Buscar producto por id
SELECT * FROM productos WHERE id = 3;

-- Actualizar en la base de datos
UPDATE productos 
		 SET
         nombre = 'Tarta',
         descripcion = '200g. de calorias',
         precio = '35',
         stock = '2'
         WHERE id = '3';
         
-- Conteo de productos para generar el siguiente id
SELECT (COUNT(id) + 1) AS total_registros FROM productos;

-- Eliminar productos poner el id
DELETE FROM productos WHERE id = "";
