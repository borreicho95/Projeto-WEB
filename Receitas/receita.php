<?php

require ('model.php');
$categorias = getCategorias();

$receitas = getReceitas();

$idCategorias = $_GET['idCat'];

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
    <?php echo '<title>'.$nomeReceita.'</title>'; ?>
    <link rel="stylesheet" href="receita.css" >
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
    echo '<p id="desc">'.$receitas[$idReceita]['Descrição'].'</p>';
    echo '<div class="tabela1">
          <p><i class="fa-solid fa-users"></i>'.' '.$receitas[$idReceita]['Número de pessoas'].' '.'Convidados</p>
          <p>|</p>
          <p><i class="fa-regular fa-clock"></i>'.' '.$tempos[$tempo].' '.'</p>
          <p>|</p>
          <p><i class="fa-solid fa-layer-group"></i> Dificuldade '.' '.$dificuldades[$dificuldade].' '.'</p>
          </div>';
    echo '<div class="tabelaingredientes">';
    
    for($i = 1; $i < 10; $i++){
      if(empty($receitas[$idReceita]['ingrediente'.$i])){
           
      }else{
        echo '<p id="linha1">'.' '.$receitas[$idReceita]['ingrediente'.$i].'</p>';
        echo '<p id="linhaV">|</p>';
      }
  }
    
    echo '</div>';
    echo '<h2>Como fazer '.$receitas[$idReceita]['Nome Receita'].'</h2>';
    
    for($i=1; $i < 12; $i++){
      if (empty($receitas[$idReceita]['preparação'.$i]) && empty($receitas[$idReceita]['foto'.$i])) {

      
      } elseif (empty($receitas[$idReceita]['preparação'.$i])) {
  
        echo '<img src="'.$receitas[$idReceita]['foto'.$i].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
  
      } elseif (empty($receitas[$idReceita]['foto'.$i])) {
  
        echo '<h3>Passo '.$i.'</h3>';
        echo '<p> '.' '.$receitas[$idReceita]['preparação'.$i].'</p>';
  
      } else {
        echo '<h3>Passo '.$i.'</h3>';
        echo '<p> '.' '.$receitas[$idReceita]['preparação'.$i].'</p>
            <img src="'.$receitas[$idReceita]['foto'.$i].'" alt="'.$receitas[$idReceita]['Nome Receita'].'">';
      }
  
    }
?>
</div>

<footer class="footer">
          <p>Trabalho Realizado por: Gabriel Lopes e João Felício</p>
      </footer>

</body>
</html>