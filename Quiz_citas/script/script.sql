create table citas 
(
	fecha date,
	doctor text,
	pasiente text,
	motivo text
);

insert into citas (fecha, doctor, pasiente, motivo)
	values ('02/01/2019', 'carlos', 'pedro', 'se quebro una pierna'),
		   ('08/02/2019', 'luis', 'juan', 'se quebro una pierna'),
		   ('04/08/2019', 'carlos', 'minor', 'se quebro una pierna'),
		   ('05/06/2019', 'carlos', 'pedro', 'se quebro una pierna');
		   
select * from citas