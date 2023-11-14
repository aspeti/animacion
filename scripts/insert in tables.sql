insert into rol (id_rol,nombre, descripcion, eliminado)values
(1,"admin","administrador",0),
(2,"cliente","cliente",0);

insert into usuario(id_usuario,fecha_creacion,eliminado,email,password,nombre,apellido,id_rol)values
(1,CURDATE(),0,"admin@gmail.com",MD5("admin"),'Admin','Apellido',1),
(2,CURDATE(),0,"usuario@gmail.com",MD5("usuario"),'Lineth','Vallejos',2);

insert into comprobante (id_comprobante,nombre,cantidad,serie)values(1,'recibo',1,'001');

insert into categoria (id_categoria,nombre, descripcion, eliminado)values
(1,"Fijo","Servicios para Paquete",0),
(2,"Adicional","Servicios de eleccion",0),
(3,"Humor","Categoria de chistes",0),
(4,"Tematica","Vestuario",0);

insert into producto (id_producto,nombre, descripcion,precio, eliminado,id_categoria)values
(1,"Default","Default",0,0,1),
(2,"Payaso","Show de 3 horas con payaso Trapito ",250,0,1),
(3,"Humor","Humor infantil durante el Show",200,0,3),
(4,"Pinta caritas","Pinta caritas para 20 niños",100,0,2),
(5,"Anime","Animadores con disfraces de anime",150,0,4);