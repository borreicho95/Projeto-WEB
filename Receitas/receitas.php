<?php

require ('model.php');
$categorias = getCategorias();

$receitas = getReceitas();

$idCategorias = $_GET['idCat'];

$nameCat = $_GET['nameCat'];


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
              
              for($i=12; $i < 17; $i++) {
                echo '<a href="receitas.php?idCat='.$i.'&nameCat='.$categorias[$i]['categoria'].'">'.$categorias[$i]['categoria'].'</a>';
            }
            
            ?>
            </div>
            </div>
            </div>
            </div>
            <div class="search-container">
            <form action="procurarReceita.php">
            <input type="text" placeholder="Procurar.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            </div>
        
</div>

<div class="receita">
  <h1>A Ver Receitas: <?php echo $nameCat; ?></h1>
  <?php
  for($i=0 ; $i < count($receitas); $i++){
    if($receitas[$i]['id_categoria'] == $idCategorias){
      echo '<div class="receitaContainer">
      <picture>
      <source srcset="'.$receitas[$i]['foto_main'].'" type="image/webp">
      <img src="'.$receitas[$i]['foto_main'].'" alt="'.$receitas[$i]['Nome Receita'].'">
      </picture>
      <a id="nomeReceita" href="receita.php?idReceita='.$receitas[$i]['id_receita'].'&idCat='.$receitas[$i]['id_categoria'].'&nameCat='.$nameCat.'&nomeReceita='.$receitas[$i]['Nome Receita'].'" >'.$receitas[$i]['Nome Receita'].'</a>
      </div>';
    }
  }
  
  
  
  ?>
</div>

<footer class="footerFixed">
          <p>Trabalho Realizado por: Gabriel Lopes e João Felício</p>
      </footer>

</body>
</html>