use danilo_oo;

create table products (
id int primary key,
name varchar(255),
description varchar(255)
);

select * from products;

INSERT INTO `danilo_oo`.`products` (`id`, `name`, `description`) VALUES ('1', 'dan', 'php-oo');
