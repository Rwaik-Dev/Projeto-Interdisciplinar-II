<?php
    if ($_REQUEST["odio"] != "")
    {
       switch($_REQUEST["odio"])
       {
          // Luzes da sala
          case "Desligar luz da sala" : $acao = "0"; break;
          case "Ligar luz da sala" : $acao = "1"; break;
          // Luz da Garagem
          case "Desligar luz da Garagem": $acao = "2"; break;
          case "Ligar luz da Garagem" : $acao = "3"; break;
          // Luz da Cozinha
          case "Desligar luz da Cozinha": $acao = "4"; break;
          case "Ligar luz da Cozinha" : $acao = "5"; break;
          // Luz do Banheiro
          case "Desligar luz do Banheiro": $acao = "6" ;break;
          case "Ligar luz do Banheiro" : $acao = "7"; break;
          // Luz da Lavanderia
          case "Desligar luz da Lavanderia": $acao = "8" ;break;
          case "Ligar luz da Lavanderia" : $acao = "9"; break;
          // Luz Geral
          case "Desligar todas as Luzes": $acao = "10"; break;
          case "Ligar todas as Luzes": $acao = "11"; break;

       }
       $conexaoArduino = fopen("COM5","w");
       fwrite($conexaoArduino,$acao);
       fclose($conexaoArduino);

     }
?>
