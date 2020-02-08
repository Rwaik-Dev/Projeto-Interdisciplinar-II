<?php
    if ($_REQUEST["odio"] != "")
    {
       switch($_REQUEST["odio"])
       {
          // Luzes da sala
          case "Desligar luz da sala" : $acao = "1"; break;
          case "Ligar luz da sala" : $acao = "2"; break;
          // Luz da Garagem
          case "Desligar luz da Garagem": $acao = "4"; break;
          case "Ligar luz da Garagem" : $acao = "3"; break;
          // Luz da Cozinha
          case "Desligar luz da Cozinha": $acao = "5"; break;
          case "Ligar luz da Cozinha" : $acao = "6"; break;
          // Luz do Banheiro
          case "Desligar luz do Banheiro": $acao = "7" ;break;
          case "Ligar luz do Banheiro" : $acao = "8"; break;
          // Luz da Lavanderia
          case "Desligar luz da Lavanderia": $acao = "9" ;break;
          case "Ligar luz da Lavanderia" : $acao = "10"; break;
          // Luz Geral
          case "Desligar luzes do 1° andar": $acao = "11"; break;
          case "Ligar luzes do 1° andar": $acao = "12"; break;

          // Segundo Andar

          // Comodo 1
          case "Desligar luz do Quarto 1" : $acao = "13"; break;
          case "Ligar luz do Quarto 1" : $acao = "14"; break;
          //Comodo 2
          case "Desligar luz do Quarto 2" : $acao = "15"; break;
          case "Ligar luz do Quarto 2" : $acao = "16"; break;
          // Comodo 3
          case "Desligar luz do Quarto 3" : $acao = "17"; break;
          case "Ligar luz do Quarto 3" : $acao = "18"; break;
          // Comodo 4
          case "Desligar luz do Quarto 4" : $acao = "19"; break;
          case "Ligar luz do Quarto 4" : $acao = "20"; break;

          case "Desligar luzes do 2° andar": $acao = "21"; break;
          case "Ligar luzes do 2° andar": $acao = "22"; break;


          //Portão Eletronico

          case 'Abrir portão' : $acao = '23'; break;
          case 'Fechar portão' : $acao = '24'; break;
          //Luzes gerais
          case "Desligar todas as luzes": $acao = "25"; break;
          case "Ligar todas as luzes": $acao = "26"; break;
       }
       $conexaoArduino = fopen("COM5","w");
       fwrite($conexaoArduino,$acao);
       fclose($conexaoArduino);
       header("Location: painel.php");

   }
?>
