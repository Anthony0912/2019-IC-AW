create table users(
	id serial primary key,
	username varchar not null unique,
	password varchar not null
);

create table cars (
	id serial primary key,
	brand varchar not null,
	year int not null
);


insert into users(username, password)
	values ('juanito', '123456'),
		   ('juanita', '654321');

UPDATE users SET password = md5('password');
