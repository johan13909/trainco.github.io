CREATE DATABASE train_co;
create table Usuarios (
	Id_user int not null auto_increment,
    Nom_usuario VARCHAR(100) UNIQUE,
    Nombres VARCHAR(100),
    Apellidos VARCHAR(100),
    Celular bigint,
    Email varchar(50) not null,
    Contraseña varchar(30) default null,
    Fec_regis timestamp default current_timestamp,
    Id_rol int not NULL,
    primary key (Id_User)
);

INSERT INTO usuarios VALUES ('','jvargas','Johan','Vargas',3022311809,'Johan.softwaresql@gmail.com','123456789','2022-04-01 00:00:00',1);


create table Rol_usuarios(
    Id_rol int not null auto_increment,
    Rol varchar(50) not null,
    Activo BIT,
    primary key (Id_rol)
);
insert into rol_usuarios values ('','Administrador',1);
insert into rol_usuarios values ('','Cliente',1);
insert into rol_usuarios values ('','Entrenador',1);

Create table servicios(
    Id_servicio INT not NULL AUTO_INCREMENT,
    Id_user_cliente INT not NULL,
    Id_user_entrenador INT DEFAULT null,
    fec_registro timestamp default CURRENT_TIMESTAMP,
    fecregis_entrenador timestamp default CURRENT_TIMESTAMP,
    Activo BIT,
    primary key (Id_servicio)
);


ALTER TABLE usuarios ADD FOREIGN KEY (Id_rol) REFERENCES Rol_usuarios(Id_rol);