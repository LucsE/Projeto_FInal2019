<?php
//inserir/salvar
try {  
    $sql = "";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
      ':nome' => 'Ricardo Arrigoni'
    ));
     
    echo $stmt->rowCount(); 
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

//update
$id = 5;
$nome = "Novo nome do Ricardo";
   
try {
  $sql = 
  $stmt = $pdo->prepare('UPDATE minhaTabela SET nome = :nome WHERE id = :id');
  $stmt->execute(array(
    ':id'   => $id,
    ':nome' => $nome
  ));
     
  echo $stmt->rowCount(); 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

//delete
$id = 5; 
   
try {
  $pdo = new PDO('mysql:host=localhost;dbname=meuBancoDeDados', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('DELETE FROM minhaTabela WHERE id = :id');
  $stmt->bindParam(':id', $id); 
  $stmt->execute();
     
  echo $stmt->rowCount(); 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

//select
$consulta = $pdo->query("SELECT nome, usuario FROM login;");
 
  
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$linha['nome']} - Usuário: {$linha['usuario']}<br />";
}

?>