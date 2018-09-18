<?php
  require_once 'CadastroController.php';
  require_once 'connection.php';

  $nome = $_POST['nomeUsuario'];
  $email = $_POST['emailUsuario'];
  $senha = $_POST['senhaUsuario'];
  $confirmaSenha=$_POST['confSenhaUsuario'];

  //tratar erro de instalar dois emails iguais

  $resultado=validaSenhaUsuario($nome,$email,$senha,$confirmaSenha,$connection);
  // if ($senha==$confirmaSenha){
  //   $resultado=insereUsuario($nome,$email,$senha,$connection);
  //   print_r($resultado);
  // }
  // else {
  //     header("Location: CadastrarUsuarioView.php?senhaErro=1");
  // }
  // $resultado=insereUsuario($nome,$email,$senha,$connection);
  // print_r($resultado);
?>
