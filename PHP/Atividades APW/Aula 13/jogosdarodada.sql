-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jun-2021 às 20:14
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jogosdarodada`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `goleadores`
--

CREATE TABLE `goleadores` (
  `nome` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL,
  `gols` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `goleadores`
--

INSERT INTO `goleadores` (`nome`, `time`, `gols`) VALUES
('Fred', 'Atlético', 20),
('Luís Fabiano', 'Vasco', 17),
('Luan', 'Grêmio', 15),
('Wellington Paulista', 'Chapecoense', 12),
('Rafael', 'Cruzeiro', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `jogo` varchar(100) NOT NULL,
  `local` varchar(50) NOT NULL,
  `horario` char(5) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`jogo`, `local`, `horario`, `data`) VALUES
('Grêmio x Atlético-MG', 'Arena do Grêmio', '20:30', '2018-05-22'),
('Goiás x Fluminense', 'Serra Dourada', '20:30', '2018-05-22'),
('Criciúma x Vasco', 'Heriberto Hulse', '20:30', '2018-05-22'),
('Vitória x São Caetano', 'Barradão', '21:30', '2018-05-22'),
('Cruzeiro x Flamengo', 'Mineirão', '21:30', '2018-05-22'),
('Grêmio x Atlético-MG', 'Arena do Grêmio', '20:30', '2021-06-10'),
('Grêmio x Atlético-MG', 'Arena do Grêmio', '20:30', '2021-06-10'),
('Goiás x Fluminense', 'Serra Dourada', '20:30', '2021-06-11'),
('Criciúma x Vasco', 'Heriberto Hulse', '20:30', '2021-06-12'),
('Vitória x São Caetano', 'Barradão', '21:30', '2021-06-12'),
('Cruzeiro x Flamengo', 'Mineirão', '21:30', '2021-06-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
