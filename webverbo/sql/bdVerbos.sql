-- creamos la base de datos de verbos irregulares y regulares
create database verbos;
use verbos;

-- creamos una tabla 
CREATE TABLE irregular(
	id int not null auto_increment,
    prensent_tense varchar(20) not null,
    past_tense varchar(20) not null,
    past_participe varchar(20) not null,
    gerund varchar(20) not null,
    spanish varchar(30),
    primary key(id)
    
)ENGINE = InnoDB;

CREATE TABLE regular(
	id int not null auto_increment,
    prensent_tense varchar(20) not null,
    past_tense varchar(20) not null,
    past_participe varchar(20) not null,
    gerund varchar(20) not null,
    spanish varchar(30),
    primary key(id)
    
)ENGINE = InnoDB;



