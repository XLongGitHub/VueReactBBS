drop database if exists `thinkphp`;
create database `thinkphp`;

use  `thinkphp`;

drop table if exists `think_users`;
create table `think_users`(
    `id` int(11) primary key auto_increment,
    `name` varchar(20),
    `gender` tinyInt(2),
    `phone` varchar(20),
    `password` varchar(60),
    `address` varchar(60),
    `birthday` varchar(20),
    `email` varchar(30),
    `description` varchar(255),
    `create_date` varchar(30),
    `write_date` varchar(30)

);
