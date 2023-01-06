--   Criar a Tabela `receitas`
CREATE TABLE IF NOT EXISTS `receitas` (
    `id_receita` INT(2) NOT NULL,
    `Nome Receita` varchar(40) NOT NULL,
    `Nome do utilizador` varchar(20) NOT NULL,
    `Descrição` varchar(1000) NOT NULL,
    `Número de pessoas` INT(2) NOT NULL,
    `id_dificuldade` INT(1) NOT NULL,
    `Data` datetime,
    `id_tempo` int(2) NOT NULL,
    PRIMARY KEY (`id_receita`),
    FOREIGN KEY (`id_dificuldade`) References dificuldade(`id_dificuldade`),
) ENGINE=InnoDB CHARSET=utf8