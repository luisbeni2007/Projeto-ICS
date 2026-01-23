--
-- Estrutura e Dados para a pasta confs-mysql
-- Uso: mysql -u root -p lojaprojeto < estrutura_completa.sql
--

CREATE DATABASE IF NOT EXISTS `lojaprojeto`;
USE `lojaprojeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Categoria`
--

CREATE TABLE IF NOT EXISTS `Categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Estrutura da tabela `Produtos`
--

CREATE TABLE IF NOT EXISTS `Produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `Categoria` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Inserindo Categorias (Total: 3)
--

INSERT INTO `Categoria` (`id`, `nome`) VALUES
(1, 'Console'),
(2, 'Periféricos'),
(3, 'Jogos');

--
-- Inserindo Produtos Relacionados (Total: 4)
--

INSERT INTO `Produtos` (`nome`, `preco`, `descricao`, `id_categoria`) VALUES
('xbox 360', 1000.00, 'console muito bom', 1),
('Mouse Gamer RGB', 150.50, 'Mouse com 12000 DPI e luzes customizáveis', 2),
('Teclado Mecânico', 350.00, 'Switch azul com padrão ABNT2', 2),
('Elden Ring', 250.00, 'Jogo do ano em mídia digital', 3);
