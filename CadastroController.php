<?php

function validaSenhaUsuario($nome,$email,$senha,$confirmaSenha,$connection){
  if ($senha==$confirmaSenha){
    $resultado=insereUsuario($nome,$email,$senha,$connection);
    print_r($resultado );
  }
  else {
      header("Location: CadastrarUsuarioView.php?senhaErro=1");
  }

}

function insereUsuario($nome,$email,$senha,$connection){
  $sql = "INSERT INTO usuario (st_nome_usu, st_email_usu, st_senha_usu) VALUES ('$nome', '$email', '$senha');";
  return mysqli_query($connection, $sql);
}
  // function insereUsuario($nome,$cpf,$rg,$connection){
  //   $sql = "INSERT INTO cadastro_pessoa (nome, cpf, rg) VALUES ('$nome', '$cpf', '$rg');";
  //   return mysqli_query($connection, $sql);
  // }
?>
