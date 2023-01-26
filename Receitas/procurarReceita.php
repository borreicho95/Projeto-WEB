<?php

require('model.php');

$search = $_GET['search'];

$categorias = getCategorias();

$receitas = getReceitas();

$receita = receitaExists( $search );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurar por <?php echo $search ?></title>
    <link rel="stylesheet" href="receitas.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b03cbf5467.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="navbar">
        <a href="main_Receitas.php">Inicio</a> 
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
            <form action="procurarReceita.php" method="get">
            <input type="text" placeholder="Procurar.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            </div>
        
</div>

<h1>A Mostrar Receitas: <?php echo $search ?> </h1>

<div class="receita">
<?php

if(empty($receita)){
  echo '<p id="erro404">404</p>';
  echo '<p id="erro404">Página não encontrada</p>';
  }
else{
  for($i=0 ; $i < count($receita); $i++){
    echo '<div class="receitaContainer">
    <picture>
    <source srcset="'.$receita[$i]['foto_main'].'" type="image/webp">
    <img src="'.$receita[$i]['foto_main'].'" alt="'.$receita[$i]['Nome Receita'].'">
    </picture>
    <a id="nomeReceita" href="receita.php?idReceita='.$receita[$i]['id_receita'].'&idCat='.$receita[$i]['id_categoria'].'&nomeReceita='.$receita[$i]['Nome Receita'].'" >'.$receita[$i]['Nome Receita'].'</a>
    </div>';
  }
}
  ?>
</div>

<footer class="footer">
          <p>Trabalho Realizado por: Gabriel Lopes e João Felício</p>
      </footer>

</body>
</html>