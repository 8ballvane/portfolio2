CREATE DATABASE `portfolio`;
USE `portfolio`;

CREATE TABLE `employees` (
  `id` int(11) AUTO_INCREMENT,
  `firstname` varchar(255),
  `lastname` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `employee` (`id`, `firstname`, `lastname`) VALUES
(1, 'vane', '$2y$10$jhSIk2N5BnkEEzgEBWQDw.AUQIEcrH8V0AcNLfW2nkjTAH2WgAAlW');