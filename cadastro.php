<?php
  require_once 'CadastroController.php';
  require_once 'connection.php';

  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];

  $resultado=insereUsuario($nome,$cpf,$rg,$connection);
  print_r($resultado);
?>
