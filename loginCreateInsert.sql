CREATE DATABASE `loginPhp` /*!40100 DEFAULT CHARACTER SET utf8 */;

CREATE TABLE `loginPhp`.`login` (
  `id` int(11) NOT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SELECT * FROM loginPhp.login;

INSERT INTO `loginPhp`.`login` (`id`,`userName`,`password`)
VALUES(1,'paulo', '$2y$10$YeC8UpkUfY5yi2yv9r/UA.e2NHjBCKsMbNLgtpsM2cvwKG/Jby7rW');
-- pass paulo : $2y$10$YeC8UpkUfY5yi2yv9r/UA.e2NHjBCKsMbNLgtpsM2cvwKG/Jby7rW
