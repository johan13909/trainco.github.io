create table Usuarios (
	Id_User int not null auto_increment,
    Email varchar(50) not null,
    Password varchar(30) default null,
    fec_regis timestamp default current_timestamp,
    primary key (Id_User)
)