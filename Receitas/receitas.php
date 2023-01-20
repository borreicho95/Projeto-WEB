<?php

require ('model.php');
$categorias = getCategorias();

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
              
              foreach ($categorias as $idCategoria => $categoria) {
                if ($idCategoria <= 6 ) {
                  echo "<a href='receitas.php?idCat=$idCategoria&nameCat=$categoria' >".$categoria.'</a>';
                }
              
              }
            
            ?>
            </div>
            <div class="column">
            <?php
              
              foreach ($categorias as $idCategoria => $categoria) {
                if ($idCategoria >= 7 && $idCategoria <= 12 ) {
                  echo "<a href='receitas.php?idCat=$idCategoria&nameCat=$categoria' >".$categoria.'</a>';
                }
              
              }
            
            ?>
            </div>
            <div class="column">
            <?php
              
              foreach ($categorias as $idCategoria => $categoria) {
                if ($idCategoria >= 13 ) {
                  echo "<a href='receitas.php?idCat=$idCategoria&nameCat=$categoria' >".$categoria.'</a>';
                }
              
              }
            
            ?>
            </div>
            </div>
            </div>
            </div>
            <div class="search-container">
            <form action="">
            <input type="text" placeholder="Procurar.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            </div>
        
</div>


<div></div>

</body>
</html>