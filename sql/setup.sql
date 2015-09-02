create table `users` (
	id int primary key not null auto_increment,
	name text not null,
	password text not null,
	type int not null
) DEFAULT CHARACTER SET=utf8;