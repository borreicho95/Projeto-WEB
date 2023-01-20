--   Criar a Tabela `receitas`
CREATE TABLE IF NOT EXISTS `receitas` (
    `id_receita` INT(5) NOT NULL,
    `Nome Receita` varchar(40) NOT NULL,
    `Nome do utilizador` varchar(20) NOT NULL,
    `Data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
    `foto11` varchar(100) NOT NULL,
    PRIMARY KEY (`id_receita`),
    FOREIGN KEY (`id_tempo`) References tempo(`id_tempo`),
    FOREIGN KEY (`id_dificuldade`) References dificuldade(`id_dificuldade`),
    FOREIGN KEY (`id_categoria`) References categorias(`id_categoria`)
) ENGINE=InnoDB CHARSET=utf8;

INSERT into `receitas` (`id_receita`,`Nome Receita`,`Nome do utilizador`,`Data`,`Descrição`,`Número de pessoas`,`id_tempo`,`id_dificuldade`,`ingrediente1`,`ingrediente2`,`ingrediente3`,`ingrediente4`,`ingrediente5`,`ingrediente6`,`ingrediente7`,`ingrediente8`,`ingrediente9`,`ingrediente10`,`preparação1`,`preparação2`,`preparação3`,`preparação4`,`preparação5`,`preparação6`,`preparação7`,`preparação8`,`preparação9`,`preparação10`,`id_categoria`,`foto_main`,`foto1`,`foto2`,`foto3`,`foto4`,`foto5`,`foto6`,`foto7`,`foto8`,`foto9`,`foto10`,`foto11`) VALUES
(1,
 'Folhados de salsicha simples',
 'João Felício',
 CURRENT_TIMESTAMP,
 'folhados de salsicha é aquele lanche clássico que toda a gente gosta, principalmente as crianças. Com uma massa fofinha, o nosso folhado de salsicha simples vai fazer sucesso servido como lanche no dia a dia ou na festa de aniversário dos filhos. Essa receita rende até 12 folhados e fica perfeito servido com molhos.',
 6,
 6,
 1,
 ' ½ xícara de leite morno',
 ' 1 ovo pequeno',
 '2 colheres de sopa de óleo',
 '1 colher de sopa de açúcar',
 ' ½ colher de sopa de sal',
'2 xícaras de farinha de trigo (280 gramas)',
 ' 5 gramas de fermento biológico seco',
 ' 12 salsichas',
 'água para cozinhar as salsichas',
 '',
 'Separe os ingredientes para preparar o folhado de salsicha simples.',
 'Em uma tigela misture o leite morno e o fermento. Deixe descansar por 5 minutos.',
 'Em seguida adicione o ovo, o óleo e o açúcar. Misture bem.',
 'Junte a farinha de trigo e o sal.',
 'Comece misturando com uma colher de pau e quando os ingredientes estiverem bem incorporados sove a massa por 15 minutos.',
 'A massa deve ficar lisa, macia e grudando levemente nas mãos. Coloque em uma tigela, cubra com um pano e deixe crescer por 1 hora.',
 'Enquanto isso coloque as salsichas em uma panela, cubra com água e cozinhe por mais 5 minutos a partir do momento que começar a ferver. Desligue o fogo, espere esfriar, corte as salsichas ao meio e reserve.',
 'Após o descanso da massa separe uma porção e corte uma tira retangular e enrole as salsichas na massa.',
 'Coloque em uma assadeira untada com manteiga, coloque as salsichas enroladas com a massa e pincele um pouco de manteiga na superfície.',
 'Leve para assar em forno pré-aquecido a 180 graus por 30 minutos ou até dourar e sirva em seguida. Bom apetite!',
 14,
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_600.webp',
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_paso_0_600.webp',
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_paso_1_600.webp',
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_paso_2_600.webp',
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_paso_3_600.webp',
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_paso_4_600.webp',
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_paso_5_600.webp',
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_paso_6_600.webp',
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_paso_7_600.webp',
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_paso_8_600.webp',
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_paso_9_600.webp',
 'https://cdn0.tudoreceitas.com/pt/posts/4/8/0/enroladinho_de_salsicha_simples_11084_paso_10_600.webp' );