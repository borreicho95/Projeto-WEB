--   Criar a Tabela `tempo`
CREATE TABLE IF NOT EXISTS `tempo` (
    `id_tempo` INT(2) NOT NULL,
    `time` varchar(20) NOT NULL,
    PRIMARY KEY (`id_tempo`)
) ENGINE=InnoDB CHARSET=utf8;

--
-- Inserção de registos de Utilizadores
--
INSERT INTO `tempo`(`id_tempo`, `time`) VALUES
(0, '15m'),
(1, '30m'),
(2, '45m'),
(3, '1h'),
(4, '1h15m'),
(5, '1h30m'),
(6, '1h45m'),
(7, '2h'),
(8, '2h15m'),
(9, '2h30m');
