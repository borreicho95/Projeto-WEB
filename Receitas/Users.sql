--   Criar a Tabela `users`
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
     `email` varchar(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB CHARSET=utf8;

--
-- Inserção de registos de utilizadores`
--
INSERT INTO `users` (`username`, `password`, `email`) VALUES
('antrob', '1234', 'antrob@gmail.com'),
('bujibuji', '1234', 'buji@gmail.com'),
('roni', '1234', 'roni@gmail.com');