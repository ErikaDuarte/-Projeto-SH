-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Out-2021 às 22:36
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cslog_hilure`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pl_contrato_hilure`
--

DROP TABLE IF EXISTS `pl_contrato_hilure`;
CREATE TABLE IF NOT EXISTS `pl_contrato_hilure` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `cidade` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pl_contrato_hilure`
--

INSERT INTO `pl_contrato_hilure` (`id_user`, `nome`, `email`, `senha`, `telefone`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`) VALUES
(1, 'deiverson', 'deiversonventura@gmail.com', '150', '123456', 'masculino', '2021-10-10', 'tal', 'tal', 'tal'),
(2, 'Deiverson Ventura', 'deiverson.ventura@gmail.com', '123', '85982252473', 'masculino', '2001-08-18', 'Paraipaba', 'CE', 'Paraipaba'),
(11, 'Deiverson Ventura Gerônimo', 'deiv@gmail.com', '12345', '122333', 'masculino', '2021-10-28', 'Paraipabaa', 'a', 'Aaa'),
(13, 'Alex', 'Alexmm@gmail.com', '12344', '1234321', 'masculino', '2021-10-27', 'fulado e tal', 'ce', 'tal t'),
(12, 'Lucas', 'lg22@gmail.com', '1234', '78887878', 'masculino', '2021-10-28', 'tal', 'tal', 'rua tal'),
(14, 'Luiz', 'lhg@gmail.com', '1234', '2345678', 'masculino', '2021-10-29', 'tal', 'tal', 'tal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
