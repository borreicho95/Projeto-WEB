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

  $receitas = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

  return $receitas;
}

/*
    Devolve todas as categorias que existem
*/
function getCategorias()
{
  $conexao = estabelerConexao();

  $stmt = $conexao->query('Select * From categorias');

  $categorias = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

  return $categorias;
}

/* 
   Verifica se um dado username existe 
*/ 
function usernameExists( $username )
{
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("SELECT username FROM users WHERE username=:username" );
    $stmt->execute( [ 'username' => $username ] );
    $username = $stmt->fetchColumn();

    return is_string($username);
}

/* 
   Adiciona um novo utilizador 
*/ 
function adicionarUser( $username )
{
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("INSERT INTO users (`username`) VALUES (:username)");
    $stmt->execute( [ 'username' => $username ] );
}

/* 
   Retorna um array com os likes associados a um user 
*/ 
function getLikes( $username )
{
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("SELECT id_receita FROM userlikes WHERE username=:username" );
    $stmt->execute( [ 'username' => $username ] );
    $likes = $stmt->fetchAll(PDO::FETCH_COLUMN);
   
    return $likes; 
}

/* 
   Adiciona um Like aos Likes de um utilizador 
   cujo 'username' é passado no primeiro parâmetro,
   e a fotoId passada no segundo parâmetro  
*/ 
function adicionarLike($username, $idReceita )
{
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("INSERT INTO userlikes ( `username`, `id_receita` ) VALUES (:username, :id_receita )");
    $stmt->execute( [ 'username' => $username, 'id_receita' => $idReceita] );
}

/* 
   Remove um Like dos Likes de um utilizador 
   cujo 'username' é passado no primeiro parâmetro,
    e a fotoId passada no segundo parâmetro  
*/ 
function removerLike($username, $idReceita ) {
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("DELETE FROM userlikes WHERE `username`=:username AND `id_receita`=:id_receita ");
    $stmt->execute( [ 'username' => $username, 'id_receita' => $idReceita] );
}



?>