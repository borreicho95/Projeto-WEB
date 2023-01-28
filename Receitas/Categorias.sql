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
(0, 'Pão e Bolos', '<i class="fa-solid fa-bread-slice"></i>'),
(1, 'Sobremesas', '<i class="fa-solid fa-ice-cream"></i>'),
(2, 'Carne', '<i class="fa-solid fa-drumstick-bite"></i>'),
(3, 'Aves e caça', '<i class="fa-solid fa-egg"></i>'),
(4, 'Peixe', '<i class="fa-solid fa-fish"></i>'),
(5, 'Frutos do mar', '<i class="fa-solid fa-shrimp"></i>'),
(6, 'Legumes', '<i class="fa-solid fa-carrot"></i>'),
(7, 'Verduras', '<i class="fa-solid fa-seedling"></i>'),
(8, 'Arroz e cereais', '<i class="fa-solid fa-bowl-rice"></i>'),
(9, 'Massas', '<i class="fa-solid fa-bowl-food"></i>'),
(10, 'Saladas', '<i class="fa-solid fa-seedling"></i>'),
(11, 'Sopas', '<i class="fa-solid fa-bowl-food"></i>'),
(12, 'Ovos e laticínios', '<i class="fa-solid fa-egg"></i>'),
(13, 'Aperitivos e pestiscos', '<i class="fa-solid fa-stroopwafel"></i>'),
(14, 'Molhos e acompanhamentos', '<i class="fa-solid fa-wine-bottle"></i>'),
(15, 'Coquetéis e bebidas', '<i class="fa-solid fa-champagne-glasses"></i>'),
(16, 'Comida de panela', '<i class="fa-solid fa-bowl-food"></i>'),
(17, 'Conselhos de cozinha', '<i class="fa-solid fa-utensils"></i>');
