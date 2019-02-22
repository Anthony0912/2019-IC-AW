create table users(
	id serial primary key,
	username varchar not null unique,
	password varchar not null
);


insert into users(username, password)
	values ('juanito', '123456'),
		   ('juanita', '654321');