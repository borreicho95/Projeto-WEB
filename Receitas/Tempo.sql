--   Criar a Tabela `tempo`
CREATE TABLE IF NOT EXISTS `tempo` (
    `id_tempo` INT(2) NOT NULL,
    `time` varchar(20) NOT NULL,
    PRIMARY KEY (`id_tempo`)
) ENGINE=InnoDB CHARSET=utf8

--
-- Inserção de registos de Utilizadores
--
INSERT INTO `tempo`(`id_tempo`, `time`) VALUES
(1, '15m'),
(2, '30m'),
(3, '45m'),
(4, '1h'),
(5, '1h15m'),
(6, '1h30m');
