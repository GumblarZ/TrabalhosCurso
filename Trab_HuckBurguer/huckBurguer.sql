
CREATE DATABASE huckBurguer;
use huckBurguer;
CREATE TABLE `pedidos` (
  `id` int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` text NOT NULL,
  `telefone` text NOT NULL,
  `ponto_carne` text NOT NULL,
  `pao` text NOT NULL,
  `queijo` text NOT NULL,
  `obervacoes` varchar(300) NOT NULL
) 
