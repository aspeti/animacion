insert into rol (id_rol,nombre, descripcion, eliminado)values
(1,"admin","administrador",0),
(2,"cliente","cliente",0);

insert into usuario(id_usuario,fecha_creacion,eliminado,email,password,nombre,apellido,id_rol)values
(1,CURDATE(),0,"admin@gmail.com",MD5("admin"),'Admin','Apellido',1),
(2,CURDATE(),0,"usuario@gmail.com",MD5("usuario"),'Lineth','Vallejos',2);

insert into comprobante (id_comprobante,nombre,cantidad,serie)values(1,'recibo',1,'001')