create database gudang;

	use gudang;

	create table categories (
		id_cat int not null AUTO_INCREMENT,
		name varchar (20) not null,
		primary key (id_cat)
	);

	create table products (
		id_prod int not null AUTO_INCREMENT,
		name varchar (20) not null,
		id_cat int not null,
		primary key (id_prod),
		foreign key (id_cat) references categories(id_cat)
	);

	insert into categories values
	('1','Peralatan Mandi'),
	('2','Mie Instan'),
	('3','Olahan Daging'
	);

	insert into products values
	('1','Sampo','1'),
	('2','Sikat Gigi','1'),
	('3','Indomi','2'),
	('4','Mie Sedap','2'),
	('5','Nuget','3'
	);

	SELECT categories.id_cat AS id, categories.name AS category_name, group_concat(products.name separator ", ") AS products
	FROM products,categories
	WHERE categories.id_cat = products.id_cat
	GROUP BY products.id_cat;
