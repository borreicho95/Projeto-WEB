--   Criar a Tabela `Dificuldade`
CREATE TABLE IF NOT EXISTS `dificuldade` (
    `id_dificuldade` INT(1) NOT NULL,
    `nivel` varchar(30) NOT NULL,
    PRIMARY KEY (`id_dificuldade`)
) ENGINE=InnoDB CHARSET=utf8;

--
-- Inserção de registos de Utilizadores
--
INSERT INTO `dificuldade`(`id_dificuldade`, `nivel`) VALUES
(1, 'baixa'),
(2, 'média'),
(3, 'alta');
