-- CREATE DATABASE
CREATE DATABASE spa_database DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE spa_database;

-- CREATE TABLES

CREATE TABLE users (
	id int primary key auto_increment not null,
    name VARCHAR(50) NOT NULL,
    password text,
    phone int NOT NULL,
    email VARCHAR(100) NOT NULL,
    user_role VARCHAR(30) default 'user'
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 123
insert into users (id, name, password, phone, email, user_role) values (1, 'hung', '$2y$10$jt2.6I2j7hnnrK2GOXIi7eIwe6sTh1ONCQ3vky5eIlD3sMKqlVnQS', 123, "hung123@gmail.com", "admin");
-- 456
insert into users (id, name, password, phone, email, user_role) values (2, 'hoa', '$2y$10$mwc3q/IUw4dLSVLLZ/i8YuJnvIv3XubQcldWZ7Kh7Kt7GY63kWo86', 456, "hoa123@gmail.com", "user");

-- 123
insert into users (id, name, password, phone, email, user_role) values (3, 'hoang', '$2y$10$jt2.6I2j7hnnrK2GOXIi7eIwe6sTh1ONCQ3vky5eIlD3sMKqlVnQS', 123, "hoang123@gmail.com", "user");
insert into users (id, name, password, phone, email, user_role) values (4, 'hoangng', '$2y$10$jt2.6I2j7hnnrK2GOXIi7eIwe6sTh1ONCQ3vky5eIlD3sMKqlVnQS', 123, "hoangng123@gmail.com", "user");




create table `categories` (
	id int auto_increment,
	name varchar(50) not null,
    primary key(id)
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

insert into `categories` (`id`, `name`) values (1, 'Chăm sóc mắt');
insert into `categories` (`id`, `name`) values (2, 'Chăm sóc môi');
insert into `categories` (`id`, `name`) values (3, 'Chống nắng');
insert into `categories` (`id`, `name`) values (4, 'Da bị dị ứng');
insert into `categories` (`id`, `name`) values (5, 'Da hỗn hợp');
insert into `categories` (`id`, `name`) values (6, 'Dưỡng ẩm');
insert into `categories` (`id`, `name`) values (7, 'Mặt nạ');
insert into `categories` (`id`, `name`) values (8, 'Serum');
insert into `categories` (`id`, `name`) values (9, 'Sữa rửa mặt');
insert into `categories` (`id`, `name`) values (10, 'Tẩy tế bào chết');



create table product (
	id int auto_increment,
    title text not null,
    image text,
    price float not null,
    cate_id int default null,
    primary key(id),
    constraint fk_categories_id foreign key(cate_id) references categories (id)
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (1, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/DR_Serum.jpeg', 1485000, 1);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (2, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/serum_water_burst.jpg', 1325000, 2);
                                    
insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (3, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/kem_duong_trang_da_image_ageless.jpg', 1245000, 3);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (4, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/vie_uong_tri_mun_hush_and_hush_2.jpg', 2480000, 4);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (5, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/serum_tri_nam_iluma_new.jpg', 1685000, 5);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (6, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/Image_Body_Spa_Body_Exfoliating_Scrub_1.png', 175000, 6);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (7, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/DR_Serum.jpeg', 1685000, 7);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (8, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/serum_lam_giam_kich_ung_va_diu_da_vital_c.jpg', 585000, 8);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (9, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/files/Thi/md/md-power-c-serum-jpeg.jpg', 885000, 9);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (10, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/Ageless_Microderm_blank_background.jpg', 985000, 10);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (11, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/serum_water_burst.jpg', 1255000, 1);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (12, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/files/Thi/md/md-power-c-serum-jpeg.jpg', 3485000, 2);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (13, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/kem_duong_trang_da_image_ageless.jpg', 5485000, 3);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (14, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/vie_uong_tri_mun_hush_and_hush_2.jpg', 1485000, 4);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (15, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/serum_tri_nam_iluma_new.jpg', 3415000, 5);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (16, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/Image_Body_Spa_Body_Exfoliating_Scrub_1.png', 7185000, 6);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (17, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/vie_uong_tri_mun_hush_and_hush_2.jpg', 985000, 7);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (18, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/_thumbs/serum_lam_giam_kich_ung_va_diu_da_vital_c.jpg', 1900000, 8);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (19, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/files/Thi/md/md-power-c-serum-jpeg.jpg', 1585000, 9);

insert into product (`id`, `title`, `image`, `price`, `cate_id`) values (20, 'Kem trị thâm quầng mắt', 'https://imagevietnam.vn/images/files/Thi/md/md-power-c-serum-jpeg.jpg', 2085000, 10);


create table `orders` (
	id int auto_increment,
    create_date date ,
    user_id int default null,
    primary key(id),
    constraint fk_user_id foreign key(user_id) references users (id)
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- INSERT INTO `order_product` (`order_id`, `quantity`, `user_member`, `product_id`) VALUES
-- (1, 1, 1, 1),
-- (2, 2, 2, 3),
-- (3, 12, 5, 2);


create table `orderdetail` (
	product_id int default null,
    order_id int default null,
    quantity int not null,
    constraint fk_product_id foreign key(product_id) references product(id),
    constraint fk_order_id foreign key(order_id) references orders (id)
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

