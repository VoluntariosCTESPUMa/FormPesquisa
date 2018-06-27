-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jun-2018 às 13:56
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turismo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alojamento`
--

CREATE TABLE `alojamento` (
  `numero_registo` varchar(10) DEFAULT NULL,
  `Data_registo` varchar(10) DEFAULT NULL,
  `Nome_Alojamento` varchar(100) DEFAULT NULL,
  `Imovel_Posterior_1951` varchar(1) DEFAULT NULL,
  `Data_Abertura_Publico` varchar(10) DEFAULT NULL,
  `Modalidade` varchar(36) DEFAULT NULL,
  `numero_camas` int(4) DEFAULT NULL,
  `Numero_Utentes` int(4) DEFAULT NULL,
  `numero_quartos` int(4) DEFAULT NULL,
  `numero_beliches` int(4) DEFAULT '0',
  `Endereco` varchar(250) DEFAULT NULL,
  `codigo_postal` varchar(8) DEFAULT NULL,
  `Localidade` varchar(60) DEFAULT NULL,
  `Freguesia` varchar(50) DEFAULT NULL,
  `Concelho` varchar(50) DEFAULT NULL,
  `Distrito` varchar(50) DEFAULT NULL,
  `NUTT_II` varchar(50) DEFAULT NULL,
  `Titular_da_Exploracao` varchar(100) DEFAULT NULL,
  `Titular_Qualidade` varchar(50) DEFAULT NULL,
  `Contribuinte` varchar(9) DEFAULT NULL,
  `Tipo_Titular` varchar(50) DEFAULT NULL,
  `Pais_Titular` varchar(50) DEFAULT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  `Fax` varchar(20) DEFAULT NULL,
  `Telemovel` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hotel`
--

CREATE TABLE `hotel` (
  `IdHotel` bigint(20) NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `classificacao` varchar(50) NOT NULL,
  `unidade_hoteleira` varchar(50) NOT NULL,
  `diretor` varchar(50) NOT NULL,
  `email_diretor` varchar(50) NOT NULL,
  `diretor_comercial` varchar(50) NOT NULL,
  `email_diretor_comercial` varchar(50) NOT NULL,
  `email_geral` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `grupo_hoteleiro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`IdHotel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `IdHotel` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=932;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
