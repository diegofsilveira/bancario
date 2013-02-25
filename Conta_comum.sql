CREATE TABLE `conta_comum` (
  `numero` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `abertura` date NOT NULL,
  `encerramento` date,
  `situacao` int(3) NOT NULL,
  `senha` int(10) NOT NULL,
  `saldo` double NOT NULL,
  `id_pessoa` int(10) NOT NULL,
  
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;