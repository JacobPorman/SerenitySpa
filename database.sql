-- CREATE DATABASE
CREATE DATABASE spa_database DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE spa_database;

-- CREATE TABLES

CREATE TABLE users (
	id int primary key auto_increment,
    name VARCHAR(50) NOT NULL,
    password varchar(24),
    phone int NOT NULL,
    email VARCHAR(100) NOT NULL,
    address varchar(100),
    username varchar(50) NOT NULL,
    user_role VARCHAR(30) NOT NULL
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

insert into users (id, name, password, phone, email, address, username, user_role) values (1, 'hung', '123', 123, "hung123@gmail.com", 123, "hungng", "role_admin");
insert into users (id, name, password, phone, email, address, username, user_role) values (2, 'hoa', '456', 456, "hoa123@gmail.com", 456, "hoatrung", "role_admin");

insert into users (id, name, password, phone, email, address, username, user_role) values (3, 'hoang', '123', 123, "hoang123@gmail.com", 123, "hoangng", "role_admin");
insert into users (id, name, password, phone, email, address, username, user_role) values (4, 'hoangng', '123', 123, "hoangng123@gmail.com", 123, "hoangggng", "role_admin");




create table `categories` (
	id int auto_increment,
	name varchar(50) not null,
    primary key(id)
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


create table product (
	id int auto_increment,
    title varchar(50) not null,
    image varchar(50),
    price float not null,
    cate_id int default null,
    primary key(id),
    constraint fk_categories_id foreign key(cate_id) references categories (id)
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

create table `orders` (
	id int auto_increment,
    create_date date not null,
    user_id int default null,
    primary key(id),
    constraint fk_user_id foreign key(user_id) references users (id)
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

create table `orderdetail` (
	product_id int default null,
    order_id int default null,
    quantity int not null,
    constraint fk_product_id foreign key(product_id) references product(id),
    constraint fk_order_id foreign key(order_id) references orders (id)
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

