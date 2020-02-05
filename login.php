<?php

$login= $_POST['login'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'PI_002');
if (isset($entrar)) {

  $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' ") or die("Erro ao selecionar");


  if (mysqli_num_rows($verifica) <= 0) {
    echo "<script language= 'javascript' class='alert alert-warning' type= 'text/javascript'>
    alert('Login e/ou senha incorretos.');window.location.href='login.html';</script>";
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    die();
  }else{
    setcookie("login",$login);
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    header("Location: painel.php");
  }
}
?>
