
insert into rol (nombre, descripcion, estado)values
("admin","administrador",0),
("user","usuario",0);

select * from usuario;
insert into usuario(fecha_creacion,estado,email,password,nombre,apellido,id_rol)values
(CURDATE(),estado,"admin@mail.com",MD5("admin"),'admin','apellidos',1);

insert into rol (nombre, descripcion, estado)values
("admin","administrador",0),
("cliente","cliente",0);

insert into usuario(fecha_creacion,estado,email,password,nombre,apellido,id_rol)values
(CURDATE(),estado,"lin@mail.com",MD5("lin"),'Lineth','Vallejos',1);

select * from categoria;
insert into categoria(nombre,descripcion)values
("producto","descripcion");