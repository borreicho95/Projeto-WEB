--   Criar a Tabela `categorias`
CREATE TABLE IF NOT EXISTS `categorias` (
    `id_categoria` INT(2) NOT NULL,
    `categoria` varchar(30) NOT NULL,
    PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB CHARSET=utf8

--
-- Inserção de registos de Utilizadores
--
INSERT INTO `categorias`(`id_categoria`, `categoria`) VALUES
(1, 'Pão e Bolos'),
(2, 'Sobremesas'),
(3, 'Carne'),
(4, 'Aves e caça'),
(5, 'Peixe'),
(6, 'Frutos do mar'),
(7, 'Legumes'),
(8, 'Verduras'),
(9, 'Arroz e cereais'),
(10, 'Massas'),
(11, 'Saladas'),
(12, 'Sopas'),
(13, 'Ovos e laticínios'),
(14, 'Aperitivos e pestiscos'),
(15, 'Molhos e acompanhamentos'),
(16, 'Coquetéis e bebidas'),
(17, 'Comida de panela'),
(18, 'Conselhos de cozinha');
