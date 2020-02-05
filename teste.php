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

          case "Desligar luzes do 2° andar": $acao = "23"; break;
          case "Ligar luzes do 2° andar": $acao = "24"; break;


          //Portão Eletronico

          case 'Abrir portão' : $acao = '21'; break;
          case 'Fechar portão' : $acao = '22'; break;
          //Luzes gerais
          case "Desligar todas as luzes": $acao = "25"; break;
          case "Ligar todas as luzes": $acao = "26"; break;




       }
       $conexaoArduino = fopen("COM5","w");
       fwrite($conexaoArduino,$acao);
       fclose($conexaoArduino);

     }
?>
<!-- Trocar as variaveis de valor do button depois XD -->
<html>
  <head>
     <title>Casa inteligente</title>

           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/teste.css">

  </head>
  <body>
    <h1 class="titulo">Casa inteligente</h1>
    <div class ="formul">
      
      <form action="teste.php" method="post" >
        
        <section id="andar_1">
          <h2 class="titulo" >1° Andar</h2>

          <div class="comodos">
            <h3>Sala</h3>
            <input type="submit" name="odio" class="btn btn-primary " id="Led Sala" value="Ligar luz da sala"><br><br>

            <input type="submit" name="odio" id="Led Sala" class="btn btn-danger " value="Desligar luz da sala">
          </div><!--comodos-->

          <!--  -->

          <div class="comodos">
            <h3>Garagem</h3>
            <input type="submit" name="odio" id="Led Garagem" class="btn btn-primary " value="Ligar luz da Garagem"><br><br>
            <input type="submit" name="odio" id="Led Garagem" class="btn btn-danger " value="Desligar luz da Garagem">
          </div><!--comodos-->

          <!--  -->

          <div class="comodos">
            <h3>Cozinha</h3>
            <input type="submit" name="odio" id="Led Cozinha" class="btn btn-primary " value="Ligar luz da Cozinha"><br><br>
            <input type="submit" name="odio" id="Led Cozinha" class="btn btn-danger " value="Desligar luz da Cozinha">
          </div><!--comodos-->

          <!--  -->

          <div class="comodos">
            <h3>Banheiro</h3>
            <input type="submit" name="odio" id="Led Banheiro" class="btn btn-primary "
              value="Ligar luz do Banheiro"><br><br>
            <input type="submit" name="odio" id="Led Banheiro" class="btn btn-danger "
              value="Desligar luz do Banheiro">
          </div><!--comodos-->

          <!--  -->

          <div class="comodos">
            <h3>Lavanderia</h3>
            <input type="submit" name="odio" id="Led Lavanderia" class="btn btn-primary "
              value="Ligar luz da Lavanderia"><br><br>
            <input type="submit" name="odio" id="Led Lavanderia" class="btn btn-danger "
              value="Desligar luz da Lavanderia">
          </div><!--comodos-->

          <!--  -->

          <div class="comodos">
            <h3>Luzes Gerais</h3>
            <input type="submit" name="odio" id="Luzes" class="btn btn-primary "
              value="Ligar luzes do 1° andar">
            <br><br>
            <input type="submit" name="odio" id="Luzes" class="btn btn-danger "
              value="Desligar luzes do 1° andar">
          </div><!--comodos-->
        </section>

        <!--  -->

        <section id="ue">
          <h2>2° andar</h2>
        
          <div class="comodos">
            <h3>Quarto 1</h3>
            <input type="submit" name="odio" id="Luzes" class="btn btn-primary "
             value="Ligar luz do Quarto 1">
            <br><br>
            <input type="submit" name="odio" id="Luzes" class="btn btn-danger "
             value="Desligar luz do Quarto 1">
          </div><!--comodos-->
          
          <div class="comodos">
            <h3>Quarto 2</h3>
            <input type="submit" name="odio" id="Luzes" class="btn btn-primary"
               value="Ligar luz do Quarto 2">
            <br><br>
            <input type="submit" name="odio" id="Luzes" class="btn btn-danger"
               value="Desligar luz do Quarto 2">
          </div><!--comodos-->

          <div class="comodos">
            <h3>Quarto 3</h3>
            <input type="submit" name="odio" id="Luzes" class="btn btn-primary "
             value="Ligar luz do Quarto 3">
            <br><br>
            <input type="submit" name="odio" id="Luzes" class="btn btn-danger "
             value="Desligar luz do Quarto 3">
          </div><!--comodos-->

          <div class="comodos">
            <h3>Quarto 4</h3>
            <input type="submit" name="odio" id="Luzes" class="btn btn-primary "
             value="Ligar luz do Quarto 4">
            <br><br>
            <input type="submit" name="odio" id="Luzes" class="btn btn-danger"
             value="Desligar luz do Quarto 4">
          </div>

          <div class="comodos">
            <h3>Luzes Gerais</h3>
            <input type="submit" name="odio" id="Luzes" class="btn btn-primary"
              value="Ligar luzes do 2° andar">
            <br><br>
            <input type="submit" name="odio" id="Luzes" class="btn btn-danger "
              value="Desligar luzes do 2° andar">
          </div><!--comodos-->

        </section>

        <section>
          <div class="comodos">
            <h3>Portão</h3>
              <input type="submit" name="odio" id="Luzes" class="btn btn-primary "
                value="Abrir portão">
                <br><br>
              <input type="submit" name="odio" id="Luzes"class="btn btn-danger"
                value="Fechar portão">
          </div>

          <div class="comodos">
            <h3>Luzes Gerais</h3>
            <input type="submit" name="odio" id="Luzes" class="btn btn-primary"
              value="Ligar todas as luzes">
            <br><br>
            <input type="submit" name="odio" id="Luzes" class="btn btn-danger"
              value="Desligar todas as luzes">
          </div><!--comodos-->

        </section>
                   
        </div> <!-- andar2 -->
      </form>
    </div> <!--formul -->
  </body>
</html>