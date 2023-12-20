create database jajaninn;

use jajaninn;

CREATE TABLE `users` (
  `id` int(30) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
);