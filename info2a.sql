-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2019 às 15:50
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info2a`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(70) NOT NULL,
  `adm` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cat1`
--

CREATE TABLE `cat1` (
  `idquestao` int(11) NOT NULL,
  `questao` varchar(100) NOT NULL,
  `respostaCorreta` varchar(50) NOT NULL,
  `resposta2` varchar(50) NOT NULL,
  `resposta3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cat1`
--

INSERT INTO `cat1` (`idquestao`, `questao`, `respostaCorreta`, `resposta2`, `resposta3`) VALUES
(1, 'Qual ÃƒÂ© o nome do maior continente da Terra?', 'ÃƒÂsia', 'AmÃƒÂ©rica', 'ÃƒÂfrica'),
(2, 'Em qual subcontinente americano estÃƒÂ¡ localizado Cuba?', 'AmÃƒÂ©rica Central', 'AmÃƒÂ©rica do Norte', 'AmÃƒÂ©rica do Sul'),
(3, 'Quais destes trÃƒÂªs paÃƒÂ­ses faz parte da AmÃƒÂ©rica Latina: ', 'Peru', 'EUA', 'CanadÃƒÂ¡'),
(4, 'Qual ÃƒÂ© o nome do continente onde a maioria dos paÃƒÂ­ses ÃƒÂ© formada por ilhas ou arquipÃƒÂ©lago', 'Oceania', 'AmÃƒÂ©rica', 'ÃƒÂfrica'),
(5, 'Qual ÃƒÂ© o continente com o maior nÃƒÂºmero de paÃƒÂ­ses?', 'ÃƒÂfrica', 'ÃƒÂsia', 'Europa'),
(6, 'ArgÃƒÂ©lia, LÃƒÂ­bia e Egito se localizam no continente...', 'Africano', 'AsiÃƒÂ¡tico', 'AmÃƒÂ©rica'),
(7, 'Qual ÃƒÂ© o menor paÃƒÂ­s do mundo em extensÃƒÂ£o territorial?', 'Vaticano', 'Maldivas', 'Monaco'),
(8, 'A RepÃƒÂºblica Dominicana estÃƒÂ¡ localizada em qual continente?', 'AmÃƒÂ©rica', 'Oceania', 'Europa'),
(9, 'Nova ZelÃƒÂ¢ndia, Timor Leste e Papua Nova GuinÃƒÂ© se localizam no continente...', 'Da Oceania', 'Da EurafrÃƒÂ¡sia', 'Da ÃƒÂfrica'),
(10, 'Qual ÃƒÂ© o continente conhecido como Ã¢Â€ÂœNovÃƒÂ­ssimo continenteÃ¢Â€Â?', 'Oceania', 'AntÃƒÂ¡rtida', 'AmÃƒÂ©rica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cat2`
--

CREATE TABLE `cat2` (
  `idquestao` int(11) NOT NULL,
  `questao` varchar(100) NOT NULL,
  `respostaCorreta` varchar(50) NOT NULL,
  `resposta2` varchar(50) NOT NULL,
  `resposta3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cat3`
--

CREATE TABLE `cat3` (
  `idquestao` int(11) NOT NULL,
  `questao` varchar(100) NOT NULL,
  `respostaCorreta` varchar(50) NOT NULL,
  `resposta2` varchar(50) NOT NULL,
  `resposta3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cat4`
--

CREATE TABLE `cat4` (
  `idquestao` int(11) NOT NULL,
  `questao` varchar(100) NOT NULL,
  `respostaCorreta` varchar(50) NOT NULL,
  `resposta2` varchar(50) NOT NULL,
  `resposta3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cat5`
--

CREATE TABLE `cat5` (
  `idquestao` int(11) NOT NULL,
  `questao` varchar(100) NOT NULL,
  `respostaCorreta` varchar(50) NOT NULL,
  `resposta2` varchar(50) NOT NULL,
  `resposta3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ranking`
--

CREATE TABLE `ranking` (
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ranking`
--

INSERT INTO `ranking` (`nome`, `sobrenome`, `pontos`) VALUES
('Eduardo', 'Veiga', 100),
('Gabriel', 'Abreu', 98),
('Julia', 'Moreira', 99),
('Matheus', 'Rossato', 97);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cat1`
--
ALTER TABLE `cat1`
  ADD PRIMARY KEY (`idquestao`);

--
-- Indexes for table `cat2`
--
ALTER TABLE `cat2`
  ADD PRIMARY KEY (`idquestao`);

--
-- Indexes for table `cat3`
--
ALTER TABLE `cat3`
  ADD PRIMARY KEY (`idquestao`);

--
-- Indexes for table `cat4`
--
ALTER TABLE `cat4`
  ADD PRIMARY KEY (`idquestao`);

--
-- Indexes for table `cat5`
--
ALTER TABLE `cat5`
  ADD PRIMARY KEY (`idquestao`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`nome`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
