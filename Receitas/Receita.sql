--   Criar a Tabela `receitas`
CREATE TABLE IF NOT EXISTS `receitas` (
    `id_receita` INT(5) NOT NULL,
    `Nome Receita` varchar(40) NOT NULL,
    `Nome do utilizador` varchar(20) NOT NULL,
    `Data` datetime,
    `Descrição` varchar(1000) NOT NULL,
    `Número de pessoas` INT(2) NOT NULL,
    `id_tempo` int(2) NOT NULL,
    `id_dificuldade` INT(1) NOT NULL,
    `ingrediente1`varchar(60) NOT NULL,
    `ingrediente2`varchar(60) NOT NULL,
    `ingrediente3`varchar(60) NOT NULL,
    `ingrediente4`varchar(60) NOT NULL,
    `ingrediente5`varchar(60) NOT NULL,
    `ingrediente6`varchar(60) NOT NULL, 
    `ingrediente7`varchar(60) NOT NULL,
    `ingrediente8`varchar(60),
    `ingrediente9`varchar(60),
    `ingrediente10`varchar(60),
    `preparação1` varchar(300) NOT NULL,
    `preparação2` varchar(300) NOT NULL,
    `preparação3` varchar(300) NOT NULL,
    `preparação4` varchar(300) NOT NULL,
    `preparação5` varchar(300) NOT NULL,
    `preparação6` varchar(300) NOT NULL,
    `preparação7` varchar(300) NOT NULL,
    `preparação8` varchar(300) NOT NULL,
    `preparação9` varchar(300) NOT NULL,
    `preparação10` varchar(300) NOT NULL,
    `id_categoria` INT(2) NOT NULL,
    `foto_main` varchar(100) NOT NULL,
    `foto1` varchar(100) NOT NULL,
    `foto2` varchar(100) NOT NULL,
    `foto3` varchar(100) NOT NULL,
    `foto4` varchar(100) NOT NULL,
    `foto5` varchar(100) NOT NULL,
    `foto6` varchar(100) NOT NULL,
    `foto7` varchar(100) NOT NULL,
    `foto8` varchar(100) NOT NULL,
    `foto9` varchar(100) NOT NULL,
    `foto10` varchar(100) NOT NULL,
    PRIMARY KEY (`id_receita`),
    FOREIGN KEY (`id_tempo`) References tempo(`id_tempo`),
    FOREIGN KEY (`id_dificuldade`) References dificuldade(`id_dificuldade`),
    FOREIGN KEY (`id_categoria`) References categorias(`id_categoria`)
) ENGINE=InnoDB CHARSET=utf8