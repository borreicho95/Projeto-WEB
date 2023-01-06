--   Criar a Tabela `users`
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` INT NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB CHARSET=utf8;

--
-- Inserção de registos de utilizadores`
--
INSERT INTO `users` (`id_user`, `username`) VALUES
(1, 'antrob'),
(2, 'bujibuji'),
(3, 'roni');