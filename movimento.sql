CREATE TABLE `movimento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` DATETIME  NOT NULL,
  `valor` double NOT NULL,
  `id_conta` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;