SELECT * FROM rol;
select * from rol;
SELECT CURDATE();

select * from usuario;

select * from rol;
insert into rol (nombre, descripcion, estado)values
("admin","administrador",0),
("user","usuario",0);

select * from usuario;
insert into usuario(fecha_creacion,estado,email,password,nombre,apellido,id_rol)values
(CURDATE(),estado,"lin@mail.com",MD5("lin"),'Lineth','Vallejos',1);

select * from persona;
insert into persona(estado,nombre,apellido,ci,telefono)values
(0,"Lineth","Vallejos",123,70700000);