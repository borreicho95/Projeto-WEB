<?php
  require ('model.php');

  $categorias = getCategorias();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas</title>
    <link rel="stylesheet" href="receitas.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<div class="navbar">
        <a href="/Receitas/main_Receitas">Inicio</a> 
        <a href="/Receitas/receitas">Receitas</a>
        <div class="dropdown">
          <button class="dropbtn">Categorias</button> 
          <div class="dropdown-content">
            <div class="row">
            <div class="column">
            <?php
              
              foreach ($categorias as $idCategoria => $categoria) {
                if ($idCategoria <= 6 ) {
                  echo "<a href='receitas.php?idcat=$idCategoria' >".$categoria.'</a>';
                }
              
              }
            
            ?>
            </div>
            <div class="column">
            <?php
              
              foreach ($categorias as $idCategoria => $categoria) {
                if ($idCategoria >= 7 && $idCategoria <= 12 ) {
                  echo "<a href='receitas.php?idcat=$idCategoria' >".$categoria.'</a>';
                }
              
              }
            
            ?>
            </div>
            <div class="column">
            <?php
              
              foreach ($categorias as $idCategoria => $categoria) {
                if ($idCategoria >= 13 ) {
                  echo "<a href='receitas.php?idcat=$idCategoria' >".$categoria.'</a>';
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

<?php

print_r($categorias);

?>

</body>
</html>