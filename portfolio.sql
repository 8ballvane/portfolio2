CREATE DATABASE `portfolio`;
USE `portfolio`;

CREATE TABLE `employees` (
  `firstname` varchar(255),
  `lastname` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `employee` (`firstname`, `lastname`) VALUES
('vane', 'salas');