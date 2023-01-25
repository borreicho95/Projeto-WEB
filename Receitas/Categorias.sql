--   Criar a Tabela `categorias`
CREATE TABLE IF NOT EXISTS `categorias` (
    `id_categoria` INT(2) NOT NULL,
    `categoria` varchar(30) NOT NULL,
    `fa_categoria` varchar(50) not null,
    PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB CHARSET=utf8;

--
-- Inserção de registos de Utilizadores
--
INSERT INTO `categorias`(`id_categoria`, `categoria`, `fa_categoria`) VALUES
(1, 'Pão e Bolos', '<i class="fa-solid fa-bread-slice"></i>'),
(2, 'Sobremesas', '<i class="fa-solid fa-ice-cream"></i>'),
(3, 'Carne', '<i class="fa-solid fa-drumstick-bite"></i>'),
(4, 'Aves e caça', '<i class="fa-solid fa-egg"></i>'),
(5, 'Peixe', '<i class="fa-solid fa-fish"></i>'),
(6, 'Frutos do mar', '<i class="fa-solid fa-shrimp"></i>'),
(7, 'Legumes', '<i class="fa-solid fa-carrot"></i>'),
(8, 'Verduras', '<i class="fa-solid fa-seedling"></i>'),
(9, 'Arroz e cereais', '<i class="fa-solid fa-bowl-rice"></i>'),
(10, 'Massas', '<i class="fa-solid fa-bowl-food"></i>'),
(11, 'Saladas', '<i class="fa-solid fa-seedling"></i>'),
(12, 'Sopas', '<i class="fa-solid fa-bowl-food"></i>'),
(13, 'Ovos e laticínios', '<i class="fa-solid fa-egg"></i>'),
(14, 'Aperitivos e pestiscos', '<i class="fa-solid fa-stroopwafel"></i>'),
(15, 'Molhos e acompanhamentos', '<i class="fa-solid fa-wine-bottle"></i>'),
(16, 'Coquetéis e bebidas', '<i class="fa-solid fa-champagne-glasses"></i>'),
(17, 'Comida de panela', '<i class="fa-solid fa-bowl-food"></i>'),
(18, 'Conselhos de cozinha', '<i class="fa-solid fa-utensils"></i>');
