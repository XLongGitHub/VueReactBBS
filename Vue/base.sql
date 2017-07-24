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

drop table if exists `think_questions`;
create table `think_questions`(
    `id` int(11) primary key auto_increment,
    `pid` int(11),
    `userId` int(11) comment '提出问题或回答的id',
    `title` varchar(255),
    `content` text comment '问题描述',
    `top` tinyInt(2) comment '区分是问题还是用户的回答 1 top ',
    `create_date` varchar(30),
    `write_date` varchar(30)
);

-- SELECT * FROM `think_users` WHERE ( phone = ' 13272408808 ' and password = 'e10adc3949ba59abbe56e057f20f883e' )
