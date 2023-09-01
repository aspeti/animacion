
insert into rol (nombre, descripcion, eliminado)values
("admin","administrador",0),
("user","usuario",0);

select * from usuario;
insert into usuario(fecha_creacion,eliminado,email,password,nombre,apellido,id_rol)values
(CURDATE(),0,"admin@mail.com",MD5("admin"),'admin','apellidos',1);

insert into rol (nombre, descripcion, eliminado)values
("admin","administrador",0),
("cliente","cliente",0);

select * from categoria;
insert into categoria(nombre,descripcion, eliminado)values
("producto","descripcion",0);