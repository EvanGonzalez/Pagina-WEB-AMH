Create database db_amh;
use db_amh;
Create Table iniciar_sesion(
    usuario varchar(20) not null primary key,
    contrasena varchar(20) not null,
    nombre varchar(15) not null,
    apellido varchar(30) not null,
    cedula varchar(15) not null UNIQUE 
);
Create table noticia(
    titulo varchar(50) not null primary key,
    fecha date not null,
    descripcion varchar(250) not null,
	usuario varchar(20) not null,
	FOREIGN key (usuario) references iniciar_sesion(usuario)
);
create table imagenes_noticia(
    id_imagen int auto_increment primary key,
    imagen varchar(40) not null,
    titulo varchar(30) not null,
    FOREIGN key (titulo) references noticia(titulo)
);