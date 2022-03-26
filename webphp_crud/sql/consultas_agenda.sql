use examen;

/* Creacion de la tabla */
CREATE TABLE AGENDA(
  id_agenda int not null primary key auto_increment,
  nombre varchar(20),
  apellidos varchar(20),
  telefono varchar(10),
  correo varchar(20)  
)ENGINE = INNODB;

/*Seleccionar todos los campos de la tabla agenda*/
SELECT * FROM AGENDA;

/*Insertar datos en la agenda*/
INSERT INTO AGENDA VALUES(NULL, 'Carlos', 'Olivera', '5598631248', 'carlos@carlos.com');
INSERT INTO AGENDA VALUES(NULL, 'Pilar', 'Hernández', '5562147898', 'pilar@pilar.com');
/*Eliminar los datos*/
DELETE FROM AGENDA WHERE correo = 'nat@nat.com';

/*Editar los campos*/
UPDATE AGENDA SET nombre = 'Pilar', apellidos = 'Gracía', telefono = '5562147898', correo = 'pilar@pilar.com' 
WHERE correo = 'pilar@pilar.com';

/*Quitar el modo seguro*/
SET SQL_SAFE_UPDATES = 0;

/*Buscar por correo*/
SELECT * FROM AGENDA WHERE CORREO = 'carlos@carlos.com';



