<?php

require ('model.php');
$categorias = getCategorias();

$receitas = getReceitas();

$idCategorias = $_GET['idCat'];

$nameCat = $_GET['nameCat'];

$nomeReceita = $_GET['nomeReceita'];

$idReceita = $_GET['idReceita'];

$tempos = getTempo();

$dificuldades = getDificuldades();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<title>'.$nameCat.'</title>'; ?>
    <link rel="stylesheet" href="receitas.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b03cbf5467.js" crossorigin="anonymous"></script>

   
</head>
<body>
    
<div class="navbar">
        <a href="/Aulas/Projeto-WEB/Receitas/main_Receitas.php">Inicio</a> 
        <a href="/Aulas/Projeto-WEB/Receitas/categorias.php">Receitas</a>
        <div class="dropdown">
          <button class="dropbtn">Categorias</button> 
          <div class="dropdown-content">
            <div class="row">
            <div class="column">
            <?php
              
              for($i=0; $i < 6; $i++) {
                  echo '<a href="receitas.php?idCat='.$i.'&nameCat='.$categorias[$i]['categoria'].'">'.$categorias[$i]['categoria'].'</a>';
              }
            
            ?>
            </div>
            <div class="column">
            <?php
              
              for($i=6; $i < 12; $i++) {
                echo '<a href="receitas.php?idCat='.$i.'&nameCat='.$categorias[$i]['categoria'].'">'.$categorias[$i]['categoria'].'</a>';
            }
            
            ?>
            </div>
            <div class="column">
            <?php
              
              for($i=12; $i < 18; $i++) {
                echo '<a href="receitas.php?idCat='.$i.'&nameCat='.$categorias[$i]['categoria'].'">'.$categorias[$i]['categoria'].'</a>';
            }
            
            ?>
            </div>
            </div>
            </div>
            </div>
            <div class="search-container">
			<?php
				if( !empty($username) ) {
					echo <<<LOGOUT
						<form action="logout.php">	
							<strong>$username</strong>
							<button>Logout</button>
						</form>		
					LOGOUT;	
				}
				else {
					echo <<<LOGIN
						<form action="login.php" method='POST'>	
							<input type='text' name='username' placeholder='username' />
							<button>Login</button>
						</form>		
					LOGIN;
				}
			?>
		</div>
            <div class="search-container">
            <form action="">
            <input type="text" placeholder="Procurar.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            </div>
        
</div>

<div class="paginaReceita">
<?php

    $tempo = $receitas[$idReceita]['id_tempo'];

    $dificuldade = $receitas[$idReceita]['id_dificuldade'];

    echo '<h1>Receita de '.$receitas[$idReceita]['Nome Receita'].'</h1>';
    echo '<div>
          <h3>'.$receitas[$idReceita]['Nome do utilizador'].'</h3>
          <h4>'.$receitas[$idReceita]['Data'].'</h4>
          </div>';
    echo '<img src="'.$receitas[$idReceita]['foto_main'].'">';
    echo '<p>'.$receitas[$idReceita]['Descrição'].'</p>';
    echo '<div>
          <p><i class="fa-solid fa-users"></i>'.' '.$receitas[$idReceita]['Número de pessoas'].' '.'Convidados</p>
          <p><i class="fa-regular fa-clock"></i>'.' '.$tempos[$tempo].' '.'</p>
          <p><i class="fa-solid fa-layer-group"></i>'.' '.$dificuldades[$dificuldade].' '.'</p>
          <p><i class="fa-regular fa-square"></i>'.' '.$receitas[$idReceita]['ingrediente1'].'</p>
          <p><i class="fa-regular fa-square"></i>'.' '.$receitas[$idReceita]['ingrediente2'].'</p>
          <p><i class="fa-regular fa-square"></i>'.' '.$receitas[$idReceita]['ingrediente3'].'</p>
          <p><i class="fa-regular fa-square"></i>'.' '.$receitas[$idReceita]['ingrediente4'].'</p>
          <p><i class="fa-regular fa-square"></i>'.' '.$receitas[$idReceita]['ingrediente5'].'</p>
          <p><i class="fa-regular fa-square"></i>'.' '.$receitas[$idReceita]['ingrediente6'].'</p>
          <p><i class="fa-regular fa-square"></i>'.' '.$receitas[$idReceita]['ingrediente7'].'</p>
          <p><i class="fa-regular fa-square"></i>'.' '.$receitas[$idReceita]['ingrediente8'].'</p>
          <p><i class="fa-regular fa-square"></i>'.' '.$receitas[$idReceita]['ingrediente9'].'</p>
          <p><i class="fa-regular fa-square"></i>'.' '.$receitas[$idReceita]['ingrediente10'].'</p>
          </div>';
    echo '<h2>Como fazer '.$receitas[$idReceita]['Nome Receita'].'</h2>'
    

?>
</div>


</body>
</html>