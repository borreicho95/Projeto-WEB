<?php 
	
  function estabelerConexao()
{
     // Deviam estar num ficheiro de configuração
    $hostname = "localhost";
    $databasename = "site receitas";
    $username = "root";
    $password = "";
    
    try {
        $conexao = new PDO("mysql:host=$hostname;dbname=$databasename;charset=utf8mb4",
                       $username, $password);
    }
    catch (\PDOException $e) {
        echo $e->getMessage();
    }

    return $conexao;

}

/*
    Devolve todas as receitas que existem
*/
function getReceitas()
{
  $conexao = estabelerConexao();

  $stmt = $conexao->query('Select * From receitas');

  $receitas = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $receitas;
}

function getReceitasLimit()
{
  $conexao = estabelerConexao();

  $stmt = $conexao->query('Select * From receitas limit 40');

  $receitaslimit = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $receitaslimit;
}

/*
    Devolve todas as categorias que existem
*/
function getCategorias()
{
  $conexao = estabelerConexao();

  $stmt = $conexao->query('Select * From categorias');

  $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $categorias;
}

/*
    Devolve todos os tempos que existem
*/
function getTempo()
{
  $conexao = estabelerConexao();

  $stmt = $conexao->query('Select * From tempo');

  $tempos = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

  return $tempos;
}

/*
    Devolve todas as dificuldades que existem
*/
function getDificuldades()
{
  $conexao = estabelerConexao();

  $stmt = $conexao->query('Select * From dificuldade');

  $dificuldades = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

  return $dificuldades;
}

/* 
   Verifica se uma receita existe 
*/ 
function receitaExists( $search )
{
    $conexao = estabelerConexao();
    $stmt = $conexao->query("SELECT * FROM receitas WHERE `Nome Receita` Like '%$search%'" );
    $receita = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $receita;
}




?>