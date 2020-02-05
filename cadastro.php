<?php

$login = $_POST['login']; //Atribui $login ao q foi digitado no campo de login la na tela cadastro.html.
$senha = $_POST['senha']; // Atribui $senha ao que foi digitado no campo senha em cadastro.html.
//$connect = mysqli_connect('127.0.0.1','root',''); // Abre conexão com BD.
$sql["host"] = "localhost";
$sql["usuario"] = "root";
$sql["senha"] = "";
$sql["base"] = "pi_002";
$connect = mysqli_connect($sql["host"],$sql["usuario"],$sql["senha"],$sql["base"]); // Abre conexão com BD.
$db = mysqli_select_db($connect,'pi_002'); // Seleciona o BD.
$query_select = "SELECT login FROM usuarios WHERE login = '$login' "; // Inicio da verificação de usuario.
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

if ($login == "" || $login == null)
{ // Situação que verifica se o campo login esta vazio.
  echo "<script language='javascript' type='text/javascript'>
  alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
}
else {
  if ($logarray == $login)
  { // Situação que verifica se o usuario esta cadastrado no BD.
    echo "<script language= 'javascript' type= 'text/javascript'>
    alert('Esse login já existe');window.location.href='cadastro.html';</script>";
    die();
  }
  else{ // Caso não esteja, nesta situação o sistema cadastra o mesmo no sistema.
    $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
    $insert = mysqli_query($connect,$query);

    if ($insert)
    { // Situação que retorna se o cadastro foi realizado com exito.
      echo "<script language='javascript' type= 'text/javascript'>
      alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
    }
    else
    { // Caso contrario ele retorna uma mensagem que não foi posivel cadastrar o msm.
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possivel cadastrar esse usuario.')window.location.href='cadastro.html'</script>";
    }
  }
}
 ?>
