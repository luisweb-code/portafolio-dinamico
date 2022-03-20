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
DELETE FROM AGENDA WHERE id_agenda = 2;

/*Editar los campos*/
UPDATE AGENDA 
SET nombre = 'Pilar',
apellidos = 'Gracía',
telefono = '5562147898',
correo = 'pilar@pilar.com'
WHERE id_agenda = 2;



