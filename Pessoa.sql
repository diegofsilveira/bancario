CREATE TABLE `Pessoa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cep` int(10) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `renda` double NOT NULL,
  `situacao` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;