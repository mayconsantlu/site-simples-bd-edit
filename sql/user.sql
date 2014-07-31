-- use code;

create table if not exists usuarios
	(
		id integer unsigned auto_increment not null, 
		nome varchar(150) not null,
		usuario varchar(150) not null,
		senha varchar(150) not null,
		primary key (id)
	);

select * from usuarios;

