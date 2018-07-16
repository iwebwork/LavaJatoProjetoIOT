//#include <LiquidCrystal.h>

//Definição dos pinos de controle e de envio de dados para o display:
//LiquidCrystal lcd(12, 11, 5, 4, 3, 2);

//Definição dos sensores de nível e de suas variáveis de estado:
const int chave_ON = 6;
const int select = 7;
int est_chave_ON = 0;
int est_select = 0;
bool flag = 0;

//Definição das válvula e da bomba:
const int valvula_1 = 8;
const int valvula_2 = 9;
const int bomba = 10;
const int sbaixo_1 = 11;
const int sbaixo_2 = 12;
const int salto_1 = 13;

//Definição de flags de controle do fluxo do software:
int flag_0 = 0;
int flag_1 = 0;
int flag_2 = 0;

//Definição de status dos sesnsores do software:
int est_sbaixo_1 = 0;
int est_sbaixo_2 = 0;
int est_salto_1 = 0;

void setup(){
 
//Definição das entradas: 
  pinMode(chave_ON, INPUT);
  pinMode(select, INPUT);
  pinMode(sbaixo_1, INPUT);
  pinMode(sbaixo_2, INPUT);
  pinMode(salto_1, INPUT); //Conferir entrada
  
//Definição das saídas: 
  pinMode(valvula_1, OUTPUT);
  pinMode(valvula_2, OUTPUT);
  pinMode(bomba,     OUTPUT);
  
//Inicialização das saídas:
  digitalWrite(valvula_1, LOW);
  digitalWrite(valvula_2, LOW);
  digitalWrite(bomba, LOW);

//Configuração do número de colunas e linhas do display LCD:
// lcd.begin(16, 2);
}

void loop(){

//Leitura das chaves de controle do sistema:
  est_chave_ON = digitalRead(chave_ON);
  est_select = digitalRead(select);
  est_sbaixo_1 = digitalRead(sbaixo_1);
  est_sbaixo_2 = digitalRead(sbaixo_2);
  est_salto_1 = digitalRead(salto_1);

   if(est_chave_ON==1 && est_select==1){
    digitalWrite(valvula_1, HIGH);
    digitalWrite(valvula_2, LOW);
   }
   else if(est_chave_ON==1 && est_select==0){
    digitalWrite(valvula_1, LOW);
    digitalWrite(valvula_2, HIGH);
   }
   else if(est_chave_ON==0){
    digitalWrite(valvula_1, LOW);
    digitalWrite(valvula_2, LOW);
   }
  
   if(est_sbaixo_1==0 || flag == 1){
     if(est_sbaixo_2==1 && est_salto_1==0){
       flag = 1;
       digitalWrite(bomba, HIGH);
     }
     else{
       flag = 0;
       digitalWrite(bomba, LOW);
      }
    }
 }
  

    

