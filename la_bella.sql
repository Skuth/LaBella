-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 27-Fev-2020 às 17:54
-- Versão do servidor: 10.1.38-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `la_bella`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `link` text,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `img`, `link`, `active`) VALUES
(7, '82345e93da47b91b342a41b88ecefc4e.jpg', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'feminino'),
(3, 'sapatos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `marca` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`id`, `marca`) VALUES
(3, 'La Bella');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `valor` text NOT NULL,
  `img` text NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `marca`, `tipo`, `nome`, `valor`, `img`, `clicks`, `status`) VALUES
(10, 'La Bella', 'sapatos', 'Sandália tratorada flores', '70', 'bcc92dcf40865d6948fa644b0fa9b25c.jpg', 0, 1),
(9, 'La Bella', 'sapatos', 'Sandália tratorada', '70', 'f399e53fa620a27015c037458745fd4e.jpg', 0, 1),
(8, 'La Bella', 'sapatos', 'Sapatilha mule azul', '65', '7f3614233c1fad2a45f51cf0d8b0794d.jpg', 0, 1),
(7, 'La Bella', 'sapatos', 'Sapatilha mule preta', '65', '1071d1b4ee709a34e2369dff41221492.jpg', 0, 1),
(11, 'La Bella', 'sapatos', 'Sandália tratorada onça', '75', '3795556dc5ae8cc845f8ad4a4ab36871.jpg', 0, 1),
(12, 'La Bella', 'sapatos', 'Rasteirinha confort', '70', '1976677ea202d8837fc8575a9449dd46.jpg', 0, 1),
(17, 'La Bella', 'feminino', 'Blusa cola corda', '75', '0e7cf8f451b7f8d5638f9be75c681cef.jpg,875075ba05eedc6502411d021a2ed4cd.jpg', 0, 1),
(18, 'La Bella', 'feminino', 'Blusa cigana', '75', '7075508e8d80875aa477e8d70096a075.jpg,63c3e4a3a012dabf5091857789464e3b.jpg', 0, 1),
(19, 'La Bella', 'feminino', 'Camiseta viscose ', '49', '6e2ccd59d27e8b42876521cc40d22af6.jpg', 0, 1),
(20, 'La Bella', 'feminino', 'Camiseta de botão ', '46', '71f21504f13713b564be5af89b967587.jpg', 0, 1),
(21, 'La Bella', 'feminino', 'Blusa coral de pérolas', '55', 'a707489e35e86b6b754f8769baccc398.jpg', 0, 1),
(22, 'La Bella', 'feminino', 'Camiseta de linho ', '29', '5478f4d62a6aa89d49110075704541c6.jpg,cc6f615085dcb224fa972d1e8986ce36.jpg,f71d42a3231368cfb394a83a51f7b501.jpg', 0, 1),
(23, 'La Bella', 'feminino', 'Camiseta detalhes renda', '49', '558040130b8a33f4fb2ae3ec4adaae31.jpg', 0, 1),
(24, 'La Bella', 'feminino', 'Camiseta de barra em renda e strass', '39', '042b163d234c3791183ddd4cd07fe6e8.jpg,e54c9c3f4fc27959ae59545ab5bbfd4d.jpg', 0, 1),
(25, 'La Bella', 'feminino', 'Camiseta de amarrar', '55', '0237489613d3d3aff7b4efc09d2ddf2a.jpg', 0, 1),
(26, 'La Bella', 'feminino', 'Blusa de poá', '75', '00b71cc623ac7f331dac2436627286cb.jpg', 0, 1),
(27, 'La Bella', 'feminino', 'Bata bordada em renda', '79', 'ddca8a87b051e894a15e00c5e05d2276.jpg', 0, 1),
(28, 'La Bella', 'feminino', 'Jardineira jeans rodada', '159', '52f72228ee9415e296b2a1127db9f357.jpg', 0, 1),
(29, 'La Bella', 'feminino', 'Jardineira jeans simples', '159', 'fe2ef8e4472ed88631512d9aff7e3e13.jpg', 0, 1),
(30, 'La Bella', 'feminino', 'Jardineira jeans com ilhoes', '159', 'aa9ae40d101effff7616edb688b23d1a.jpg', 0, 1),
(31, 'La Bella', 'feminino', 'Short saia pano', '59', '7b2c6eeb57d0994e851f57c58abcb97e.jpg,929d9db6deb02ee5b01d38388794f353.jpg,dfa4f1ea9276240b41a7c95ae34fef18.jpg', 0, 1),
(32, 'La Bella', 'feminino', 'Short saia detalhe lateral', '59', 'a6b59dd53b6e951a88d49d3cba5750be.jpg', 0, 1),
(33, 'La Bella', 'feminino', 'Saia jeans escuro abertura lateral', '99', '0ec11ad8aea6b33be9b1da2b881b63c9.jpg', 0, 1),
(34, 'La Bella', 'feminino', 'Saia jeans escuro abertura desfiada', '99', '85533a12022a1e858a4ca6a9267bc2ef.jpg', 0, 1),
(35, 'La Bella', 'feminino', 'Saia jeans escuro botões', '99', '06538d61660527a01d69a307c81058a7.jpg', 0, 1),
(36, 'La Bella', 'feminino', 'Saia jeans claro botões', '99', 'dbd10a29e05585b03f91cafc3fed300b.jpg', 0, 1),
(37, 'La Bella', 'feminino', 'Saia jeans claro rasgada', '99', 'e23f43f2077b0238198cec752dc199f9.jpg', 0, 1),
(38, 'La Bella', 'feminino', 'Calça skinning lisa', '99', '8be8c1d9ad255f90dd7fddfb68347983.jpg', 0, 1),
(39, 'La Bella', 'feminino', 'Calça skinning botões', '99', 'df3bf8dbdbf2261575bdb6bdf2488844.jpg,b69cf9698fa70b1b72af161b1775c23d.jpg', 0, 1),
(40, 'La Bella', 'feminino', 'Calça skinning laço', '99', '13a32795e8f89e0610e7477aa7f89b7e.jpg', 0, 1),
(41, 'La Bella', 'feminino', 'Calça capri jeans claro', '99', '5fc37688cd432291e8144cd47661ad04.jpg', 0, 1),
(42, 'La Bella', 'feminino', 'Calça capri à boca de sino', '99', '33263e1d933fe53569bdf838389e3331.jpg', 0, 1),
(43, 'La Bella', 'feminino', 'Calça jeans claro perolas', '99', 'd7c9ac4446c7305ae2da06be2a6c6c49.jpg', 0, 1),
(44, 'La Bella', 'feminino', 'Saia de poá', '55', '5f6cedb2413374b624c75b902748489f.jpg,fbf633985a93776b279c4e84aae0c252.jpg', 0, 1),
(45, 'La Bella', 'feminino', 'Saia listrada', '55', 'b99ae36a8a713606f38d2134fa4fc232.jpg', 0, 1),
(46, 'La Bella', 'feminino', 'Macacão listrado', '69', 'e8b722c93943fa61e5081c094c753f5b.jpg', 0, 1),
(47, 'La Bella', 'feminino', 'Macacão florido', '84', 'd1df227c6e7ac1f6885d1301ba8150aa.jpg', 0, 1),
(48, 'La Bella', 'feminino', 'Short de linho com fivela', '55', '76793e4bde64072014e15e25cac78190.jpg', 0, 1),
(49, 'La Bella', 'feminino', 'Short de seda azul marinho', '55', 'e7af3922072eed7b1f26861d2f557aca.jpg', 0, 1),
(50, 'La Bella', 'feminino', 'Shorts tipo couro estampa floral', '60', '15415065de6da06b8b5e1e8fa71ec71b.jpg', 0, 1),
(51, 'La Bella', 'feminino', 'Bermuda ciclista rosa', '85', '68744d87a859da266bc182da4d872881.jpg', 0, 1),
(52, 'La Bella', 'feminino', 'Vestido de poá', '79', '7a9a6c5c9d30f046ebbfbbdd2cf0fbbd.jpg', 0, 1),
(53, 'La Bella', 'feminino', 'Vestido de seda básico', '59', '3d95830135050cd2bee038cd773bc65a.jpg', 0, 1),
(54, 'La Bella', 'feminino', 'Vestido de seda florido', '59', '19f2850be4c9f9ac01006df2c8910fac.jpg', 0, 1),
(55, 'La Bella', 'feminino', 'Vestido vermelho florido', '79', '8304b6af2cb14dec8e596efe028876bd.jpg', 0, 1),
(56, 'La Bella', 'feminino', 'Vestido jeans casual', '99', '9aa99cef2b3101aca2f5f43522da50ab.jpg', 0, 1),
(57, 'La Bella', 'feminino', 'Vestido longo florido', '79', '97680bb847bb254d2fb758be1e956517.jpg', 0, 1),
(58, 'La Bella', 'feminino', 'Vestido azul florido', '49', 'c31cac26bb6618d583c9b4ad00893420.jpg', 0, 1),
(59, 'La Bella', 'feminino', 'Vestido detalhado preto', '75', 'fe9adba723c442817202ec914f1da7a3.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(64) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `nome`, `level`) VALUES
(1, 'skuth', 'b0c65869599be72ac88f2d879bf5bf0b', 'Flavio Gomes', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
