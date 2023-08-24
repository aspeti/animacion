SELECT * FROM rol;
select * from rol;
select * from usuario;
select * from persona;
insert into rol (nombre, descripcion, estado)values("admin","administrador",0);
insert into rol (nombre, descripcion, estado)values("user","usuario",0);

select * from usuario;
insert into usuario(email,password,estado,id_rol,id_persona)values
("lin@mail.com",MD5("lin"),0,1,1);

select * from persona;
insert into persona(estado,nombre,apellido,ci,telefono)values
(0,"Lineth","Vallejos",123,70700000);