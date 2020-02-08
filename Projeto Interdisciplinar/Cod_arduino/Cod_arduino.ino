#include <Servo.h> //INCLUSÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢O DA BIBLIOTECA NECESSÃƒÆ’Ã†â€™Ãƒâ€šÃ‚ÂRIA

//Primeiro andar 

int ledPinSala = 22;
int ledPinGaragem = 24;
int ledPinCozinha = 26;
int ledPinBanheiro = 28;
int ledPinLavanderia = 30;

//Segundo andar
int ledComodo1 = 32;
int ledComodo2 = 34;
int ledComodo3 = 36;
int ledComodo4 = 38;
// PortÃ£o


const int pinoServo = 40; //PINO DIGITAL UTILIZADO PELO SERVO

Servo s; //OBJETO DO TIPO SERVO
int pos; //POSIÃƒÆ’Ã¢â‚¬Â¡ÃƒÆ’Ã†â€™O DO SERVO

int numero = -5;

void setup() {                
  pinMode(ledPinSala, OUTPUT);
  pinMode(ledPinGaragem, OUTPUT);
  pinMode(ledPinCozinha, OUTPUT);
  pinMode(ledPinBanheiro, OUTPUT);
  pinMode(ledPinLavanderia, OUTPUT);
  
  pinMode(ledComodo1,OUTPUT);
  pinMode(ledComodo2,OUTPUT);
  pinMode(ledComodo3,OUTPUT);
  pinMode(ledComodo4,OUTPUT);


  s.attach(pinoServo); //ASSOCIAÃƒÆ’Ã¢â‚¬Â¡ÃƒÆ’Ã†â€™O DO PINO DIGITAL AO OBJETO DO TIPO SERVO
  s.write(0); //INICIA O MOTOR NA POSIÃƒÆ’Ã¢â‚¬Â¡ÃƒÆ’Ã†â€™O 0Ãƒâ€šÃ‚Âº
  Serial.begin(9600); 
}

// the loop routine runs over and over again forever:
void loop() {
  if (Serial.available() > 0){
      numero = Serial.parseInt();
  }
switch(numero){
  //SALA
  case 1:
    digitalWrite(ledPinSala,LOW);
    delay(1000);
    Serial.print(numero);
    break;
    

  case 2:
    digitalWrite(ledPinSala,HIGH);
    delay(1000); 
    Serial.print(numero);
    break;
    

  //GARAGEM
  case 3:
    digitalWrite(ledPinGaragem,HIGH);
    delay(1000);
    Serial.print(numero);
    break;

  case 4:
    digitalWrite(ledPinGaragem,LOW);
    delay(1000);
    Serial.print(numero);
    break;    

  // COZINHA
  case 5:
    digitalWrite(ledPinCozinha,LOW);
    delay(1000);
    Serial.print(numero);
    break;
    
  case 6:
    digitalWrite(ledPinCozinha,HIGH);
    delay(1000);
    break;
  
  //BANHEIRO
  case 7:
    digitalWrite(ledPinCozinha,LOW);
    delay(1000); 
    Serial.print(numero);
    break;
    
  case 8:
    digitalWrite(ledPinBanheiro,HIGH);
    delay(1000);
    Serial.print(numero);
    break;
    
  //LAVANDERIA
  case 9:
    digitalWrite(ledPinLavanderia,LOW);
    delay(1000);
    Serial.print(numero);
    break;

  case 10:
    digitalWrite(ledPinLavanderia,HIGH);
    delay(1000);
    Serial.print(numero);
    break;
    
  //LUZES GREAIS 1° ANDAR
  case 11:
    digitalWrite(ledPinSala,LOW);
    digitalWrite(ledPinGaragem,LOW);
    digitalWrite(ledPinCozinha,LOW);
    digitalWrite(ledPinBanheiro,LOW);
    digitalWrite(ledPinLavanderia,LOW);
    delay(1000);
    Serial.print(numero);
    break;
  
  case 12:
    digitalWrite(ledPinSala,HIGH);
    digitalWrite(ledPinGaragem,HIGH);
    digitalWrite(ledPinCozinha,HIGH);
    digitalWrite(ledPinBanheiro,HIGH);
    digitalWrite(ledPinLavanderia,HIGH);
    delay(1000);
    Serial.print(numero);
    break;
    

//SEGUNDO ANDAR

   //COMODO 1
  case 13:
    digitalWrite(ledComodo1,LOW);
    delay(1000);
    Serial.print(numero);
    break;
    
  case 14:
    digitalWrite(ledComodo1,HIGH);
    delay(1000);
    Serial.print(numero);
    break;

  //COMODO 2
  case 15:
    digitalWrite(ledComodo2,LOW);
    delay(1000);
    Serial.print(numero);
    break;
    
  case 16:
    digitalWrite(ledComodo2,HIGH);
    delay(1000);
    Serial.print(numero);
    break;
    
  //COMODO 3
  case 17:
    digitalWrite(ledComodo3,LOW);
    delay(1000);
    Serial.print(numero);
    break;
    
  case 18:
    digitalWrite(ledComodo3,HIGH);
    delay(1000);
    Serial.print(numero);
    break;

  //COMODO 4
  case 19:
    digitalWrite(ledComodo4,LOW);
    delay(1000);
    Serial.print(numero);
    break;    

  case 20:
    digitalWrite(ledComodo4,HIGH);
    delay(1000);
    Serial.print(numero);
    break;

  //LUZES GERAIS 2° ANDAR
  case 21:
    digitalWrite(ledComodo1,LOW);
    digitalWrite(ledComodo2,LOW);
    digitalWrite(ledComodo3,LOW);
    digitalWrite(ledComodo4,LOW);
    delay(1000);
    Serial.print(numero);
    break;
    
  case 22:
    digitalWrite(ledComodo1,HIGH);
    digitalWrite(ledComodo2,HIGH);
    digitalWrite(ledComodo3,HIGH);
    digitalWrite(ledComodo4,HIGH);
    delay(1000);
    Serial.print(numero);
    break;

  //PORTÃO
  case 23:
    s.write(90); //ESCREVE O VALOR DA POSIÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢O QUE O SERVO DEVE GIRAR
    delay(15); //INTERVALO DE 15 MILISSEGUNDOS
    Serial.write("Abrir");
    break;

  case 24:
    s.write(0); //ESCREVE O VALOR DA POSIÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¾Ãƒâ€šÃ‚Â¢O QUE O SERVO DEVE GIRAR
    delay(15); //INTERVALO DE 15 MILISSEGUNDOS
    Serial.write("Fechar");
    break;

  //LUZES DA CASA TODA
  case 25:
    digitalWrite(ledPinSala,LOW);
    digitalWrite(ledPinGaragem,LOW);
    digitalWrite(ledPinCozinha,LOW);
    digitalWrite(ledPinBanheiro,LOW);
    digitalWrite(ledPinLavanderia,LOW);
    digitalWrite(ledComodo1,LOW);
    digitalWrite(ledComodo2,LOW);
    digitalWrite(ledComodo3,LOW);
    digitalWrite(ledComodo4,LOW);
    delay(1000);
    Serial.print(numero);
    break;
      
  case 26:
    digitalWrite(ledPinSala,HIGH);
    digitalWrite(ledPinGaragem,HIGH);
    digitalWrite(ledPinCozinha,HIGH);
    digitalWrite(ledPinBanheiro,HIGH);
    digitalWrite(ledPinLavanderia,HIGH);
    digitalWrite(ledComodo1,HIGH);
    digitalWrite(ledComodo2,HIGH);
    digitalWrite(ledComodo3,HIGH);
    digitalWrite(ledComodo4,HIGH);
    delay(1000);
    Serial.print(numero);
    break;
  }

}
