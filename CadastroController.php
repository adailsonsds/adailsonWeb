<?php

  function insereUsuario($nome,$cpf,$rg,$connection){
    $sql = "INSERT INTO cadastro_pessoa (nome, cpf, rg) VALUES ('$nome', '$cpf', '$rg');";
    return mysqli_query($connection, $sql);
  }
?>
