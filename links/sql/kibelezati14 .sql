-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Maio-2022 às 14:23
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE kibeleza;
USE kibeleza;

--
-- Banco de dados: `kibelezati14`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(100) NOT NULL,
  `emailCliente` varchar(100) NOT NULL,
  `senhaCliente` varchar(45) NOT NULL,
  `statusCliente` varchar(20) NOT NULL,
  `dataCadCliente` date NOT NULL,
  `fotoCliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nomeCliente`, `emailCliente`, `senhaCliente`, `statusCliente`, `dataCadCliente`, `fotoCliente`) VALUES
(1, 'CARLOS EDUARDO', 'car.edu@yahoo.com', '1234', 'ATIVO', '2022-05-10', 'carlosedu.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(50) NOT NULL,
  `emailContato` varchar(80) NOT NULL,
  `foneContato` varchar(14) DEFAULT NULL,
  `mensagemContato` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`idContato`, `nomeContato`, `emailContato`, `foneContato`, `mensagemContato`) VALUES
(1, 'Devid Bonardo', 'devidbonardo123@gmail.com', '(11)98656-3665', 'Gostaria de saber o valor de um implate capilar'),
(2, 'Edson da Silva Chagas', 'edsonlegal123@gmail.com', '(11)98564-3689', 'Gostaria de saber o preço da manicure.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL,
  `nomeEmpresa` varchar(100) NOT NULL,
  `cnpjCpfEmpresa` varchar(45) NOT NULL,
  `razaoSocialEmpresa` varchar(100) NOT NULL,
  `emailEmpresa` varchar(100) NOT NULL,
  `statusEmpresa` varchar(45) NOT NULL,
  `dataCadEmpresa` date NOT NULL,
  `horarioAtendEmpresa` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `nomeEmpresa`, `cnpjCpfEmpresa`, `razaoSocialEmpresa`, `emailEmpresa`, `statusEmpresa`, `dataCadEmpresa`, `horarioAtendEmpresa`) VALUES
(1, 'Kibeleza Matrix', '55.632.986/0001-10', 'KIBELEZA CLÍNICA DE ESTÉTICA LTDA', 'kibeleza.matriz@kibeleza.com.br', 'ATIVO', '2022-05-10', '10:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fonecliente`
--

CREATE TABLE `fonecliente` (
  `idFoneCliente` int(11) NOT NULL,
  `numeroFoneCliente` varchar(20) NOT NULL,
  `operFoneCliente` varchar(45) NOT NULL,
  `descFoneCliente` varchar(45) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fonecliente`
--

INSERT INTO `fonecliente` (`idFoneCliente`, `numeroFoneCliente`, `operFoneCliente`, `descFoneCliente`, `idCliente`) VALUES
(1, '(11)96583-6583', 'CLARO', 'RECADO', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `foneempresa`
--

CREATE TABLE `foneempresa` (
  `idFoneEmpresa` int(11) NOT NULL,
  `numeroFoneEmpresa` varchar(20) NOT NULL,
  `operFoneEmpresa` varchar(45) NOT NULL,
  `descFoneEmpresa` varchar(45) NOT NULL,
  `idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fonefuncionario`
--

CREATE TABLE `fonefuncionario` (
  `idFoneFuncionario` int(11) NOT NULL,
  `numeroFoneFuncionario` varchar(20) NOT NULL,
  `operFoneFuncionario` varchar(45) NOT NULL,
  `descFoneFuncionario` varchar(45) NOT NULL,
  `idFuncionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nomeFuncionario` varchar(100) NOT NULL,
  `emailFuncionario` varchar(100) NOT NULL,
  `senhaFuncionario` varchar(45) NOT NULL,
  `nivelFuncionario` varchar(45) NOT NULL,
  `statusFuncionario` varchar(45) NOT NULL,
  `dataCadFuncionario` date NOT NULL,
  `horarioTrabalhoFuncionario` time NOT NULL,
  `idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `idReserva` int(11) NOT NULL,
  `obsReserva` text NOT NULL,
  `dataReserva` date NOT NULL,
  `horaReserva` time NOT NULL,
  `statusReserva` varchar(45) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idServico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `idServico` int(11) NOT NULL,
  `nomeServico` varchar(100) NOT NULL,
  `valorServico` decimal(10,2) NOT NULL,
  `statusServico` varchar(45) NOT NULL,
  `dataCadServico` date NOT NULL,
  `fotoServico1` varchar(100) NOT NULL,
  `fotoServico2` varchar(100) NOT NULL,
  `fotoServico3` varchar(100) NOT NULL,
  `fotoServico4` varchar(100) NOT NULL,
  `descricaoServico` text NOT NULL,
  `textoServico` text NOT NULL,
  `tempoExecServico` time NOT NULL,
  `idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idContato`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Índices para tabela `fonecliente`
--
ALTER TABLE `fonecliente`
  ADD PRIMARY KEY (`idFoneCliente`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices para tabela `foneempresa`
--
ALTER TABLE `foneempresa`
  ADD PRIMARY KEY (`idFoneEmpresa`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- Índices para tabela `fonefuncionario`
--
ALTER TABLE `fonefuncionario`
  ADD PRIMARY KEY (`idFoneFuncionario`),
  ADD KEY `idFuncionario` (`idFuncionario`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- Índices para tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idFuncionario` (`idFuncionario`),
  ADD KEY `idServico` (`idServico`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idServico`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fonecliente`
--
ALTER TABLE `fonecliente`
  MODIFY `idFoneCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `foneempresa`
--
ALTER TABLE `foneempresa`
  MODIFY `idFoneEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fonefuncionario`
--
ALTER TABLE `fonefuncionario`
  MODIFY `idFoneFuncionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `idServico` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `fonecliente`
--
ALTER TABLE `fonecliente`
  ADD CONSTRAINT `fonecliente_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `foneempresa`
--
ALTER TABLE `foneempresa`
  ADD CONSTRAINT `foneempresa_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `fonefuncionario`
--
ALTER TABLE `fonefuncionario`
  ADD CONSTRAINT `fonefuncionario_ibfk_1` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`idServico`) REFERENCES `servico` (`idServico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
