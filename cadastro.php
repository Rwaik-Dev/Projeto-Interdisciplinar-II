<?php

$login = $_POST['login']; //Atribui $login ao q foi digitado no campo de login la na tela cadastro.html.
$senha = MD5($_POST['senha']); // Atribui $senha ao que foi digitado no campo senha em cadastro.html.
$connect = mysql_connect(127.0.0.1,'root',''); // Abre conexão com BD.
$db = mysql_select_db('PI_002'); // Seleciona o BD.
$query_select = "SELECT login FROM usuarios WHERE login = '$login'"; // Inicio da verificação de usuario.
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];

if ($login == "" || $login == null) { // Situação que verifica se o campo login esta vazio.
  echo "<script language='javascript' type='text/javascript'>
  alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>"
}else {
  if ($logarray == $login) { // Situação que verifica se o usuario esta cadastrado no BD.
    echo "<script language= 'javascript' type= 'text/javascript'>
    alert('Esse login já existe');window.location.href='cadastro.html';</script>";
    die();
  }else{ // Caso não esteja, nesta situação o sistema cadastra o mesmo no sistema.
    $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
    $insert = mysql_query($query,$connect);

    if ($insert) { // Situação que retorna se o cadastro foi realizado com exito.
      echo "<script language='javascript' type= 'text/javascript'>
      alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
    }else{ // Caso contrario ele retorna uma mensagem que não foi posivel cadastrar o msm.
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possivel cadastrar esse usuario.')window.location.href='cadastro.html'</script>";
    }
  }
}
 ?>
