create database optica;
use optica;


create table usuario(
rut varchar (20),
nombre varchar(50),
rol varchar(20),
clave varchar(100),
estado int,
primary key(rut)
);

insert into usuario values ('admin','administrador','administrador',md5('administrador'),1);

create table cliente(
	rut_cliente varchar(20),
    nombre_cliente  varchar(50),
    direccion_cliente varchar(100),
    telefono_cliente varchar(20),
    fecha_creacion date,
    email_cliente varchar(50),
    primary key(rut_cliente)
);
insert into cliente values ('1-1','Carlos','Las uvas 1234','+56 9-84456798','2018-11-10','carlos@gmail.com');


