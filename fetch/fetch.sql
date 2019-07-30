create database fetch charset = utf8;
	use fetch;
	create tabel admin(
		num int auto_increment,
		id varchar(15) not null,
		password varchar(15) not null
		primary key(num));
	create tabel user(
		num int auto_increment primary key,
		id varchar(15) not null,
		password varchar(15) not null
		primary key(num))charset=utf8;
	insert into admin values(default,'admin','admin');