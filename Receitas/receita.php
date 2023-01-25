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
          <p>'.' '.$receitas[$idReceita]['Número de pessoas'].' '.'Convidados</p>
          <p>'.' '.$tempos[$tempo].' '.'</p>
          <p>Dificuldade '.' '.$dificuldades[$dificuldade].' '.'</p>
          </div>';
    echo '<div>';
    
    if(empty($receitas[$idReceita]['ingrediente1'])){
           
    }else{
      echo '<p>'.' '.$receitas[$idReceita]['ingrediente1'].'</p>';
    }
    if(empty($receitas[$idReceita]['ingrediente2'])){
           
    }else{
      echo '<p>'.' '.$receitas[$idReceita]['ingrediente2'].'</p>';
    }
    if(empty($receitas[$idReceita]['ingrediente3'])){
           
    }else{
      echo '<p>'.' '.$receitas[$idReceita]['ingrediente3'].'</p>';
    }
    if(empty($receitas[$idReceita]['ingrediente4'])){
           
    }else{
      echo '<p>'.' '.$receitas[$idReceita]['ingrediente4'].'</p>';
    }
    if(empty($receitas[$idReceita]['ingrediente5'])){
           
    }else{
      echo '<p>'.' '.$receitas[$idReceita]['ingrediente5'].'</p>';
    }
    if(empty($receitas[$idReceita]['ingrediente6'])){
           
    }else{
      echo '<p>'.' '.$receitas[$idReceita]['ingrediente6'].'</p>';
    }
    if(empty($receitas[$idReceita]['ingrediente7'])){
           
    }else{
      echo '<p>'.' '.$receitas[$idReceita]['ingrediente7'].'</p>';
    }
    if(empty($receitas[$idReceita]['ingrediente8'])){
           
    }else{
      echo '<p>'.' '.$receitas[$idReceita]['ingrediente8'].'</p>';
    }
    if(empty($receitas[$idReceita]['ingrediente9'])){
           
    }else{
      echo '<p>'.' '.$receitas[$idReceita]['ingrediente9'].'</p>';
    }
    if(empty($receitas[$idReceita]['ingrediente10'])){
           
    }else{
      echo '<p>'.' '.$receitas[$idReceita]['ingrediente10'].'</p>';
    }
    echo '</div>';
    echo '<h2>Como fazer '.$receitas[$idReceita]['Nome Receita'].'</h2>';
    if (empty($receitas[$idReceita]['preparação1'])) {
      
    } else {
      echo '<p>1 '.' '.$receitas[$idReceita]['preparação1'].'</p>
          <img src="'.$receitas[$idReceita]['foto1'].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
    }
    if (empty($receitas[$idReceita]['preparação11'])) {
      
    } else {
      echo '<p>2 '.' '.$receitas[$idReceita]['preparação2'].'</p>
          <img src="'.$receitas[$idReceita]['foto2'].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
    }
    if (empty($receitas[$idReceita]['preparação3'])) {
      
    } else {
      echo '<p>3 '.' '.$receitas[$idReceita]['preparação3'].'</p>
          <img src="'.$receitas[$idReceita]['foto3'].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
    }
    if (empty($receitas[$idReceita]['preparação4'])) {
      
    } else {
      echo '<p>4 '.' '.$receitas[$idReceita]['preparação4'].'</p>
          <img src="'.$receitas[$idReceita]['foto4'].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
    }
    if (empty($receitas[$idReceita]['preparação5'])) {
      
    } else {
      echo '<p>5 '.' '.$receitas[$idReceita]['preparação5'].'</p>
          <img src="'.$receitas[$idReceita]['foto5'].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
    }
    if (empty($receitas[$idReceita]['preparação6'])) {
      
    } else {
      echo '<p>6 '.' '.$receitas[$idReceita]['preparação6'].'</p>
          <img src="'.$receitas[$idReceita]['foto6'].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
    }
    if (empty($receitas[$idReceita]['preparação7'])) {
      
    } else {
      echo '<p>7 '.' '.$receitas[$idReceita]['preparação7'].'</p>
          <img src="'.$receitas[$idReceita]['foto7'].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
    }
    if (empty($receitas[$idReceita]['preparação8'])) {
      
    } else {
      echo '<p>8 '.' '.$receitas[$idReceita]['preparação8'].'</p>
          <img src="'.$receitas[$idReceita]['foto8'].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
    }
    if (empty($receitas[$idReceita]['preparação9'])) {
      
    } else {
      echo '<p>9 '.' '.$receitas[$idReceita]['preparação9'].'</p>
          <img src="'.$receitas[$idReceita]['foto9'].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
    }if (empty($receitas[$idReceita]['preparação11'])) {
      
    } else {
      echo '<p>10 '.' '.$receitas[$idReceita]['preparação10'].'</p>
          <img src="'.$receitas[$idReceita]['foto10'].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
    }
    if (empty($receitas[$idReceita]['preparação11'])) {
      
    } else {
      echo '<p>11 '.' '.$receitas[$idReceita]['preparação11'].'</p>
          <img src="'.$receitas[$idReceita]['foto11'].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
    }
    
    

?>
</div>


</body>
</html>