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

create table orders (
	car_id int,
	order_date date not null,
	status varchar not null
);

create table status (
	id serial primary key,
	status varchar not null
)

alter table orders add constraint fk_car_id
foreign key (car_id) references cars (id)
on update cascade on delete cascade; 

insert into users(username, password)
	values ('juanito', '123456'),
		   ('juanita', '654321');