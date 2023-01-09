--   Criar a Tabela `users`
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB CHARSET=utf8;

--Criar a tabela `userlikes`
CREATE TABLE IF NOT EXISTS `userlikes` (
  `id_receita` INT(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`username`, `id_receita`),
  FOREIGN KEY (`username`) REFERENCES users(`username`),
  FOREIGN KEY (`id_receita`) REFERENCES receitas(`id_receita`)
) ENGINE=InnoDB CHARSET=utf8;

--
-- Inserção de registos de utilizadores`
--
INSERT INTO `users` (`username`) VALUES
('antrob')
('bujibuji'),
('roni');

-- Inserção de valores na tabela `userlikes`
INSERT INTO `userlikes` (`username` , `id_receita`) VALUES
