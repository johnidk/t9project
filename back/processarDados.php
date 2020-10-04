<?php 

//$dados = $_POST['dados'];

$dados= "2 222 222 33 66 8 88 777 33";

$arrayDados= explode(" ", $dados);






$numero = array();

   foreach ($arrayDados as $value){

      switch($value[0]){

        case 2:

            $tamanho = strlen($value);
         

            if($tamanho == 1){
              $numeros[] = 'a';
            }else if($tamanho == 2) {
              $numeros[] = 'b';
            }else{
              $numeros[] = 'c';
            }
        break;

        case 3:

            $tamanho = strlen($value);

            if($tamanho == 1){
              $numeros[] = 'd';
            }else if($tamanho == 2) {
              $numeros[] = 'e';
            }else{
              $numeros[] = 'f';
            }
        break;
        case 4:
            
            $tamanho = strlen($value);
            if($tamanho == 1){
              $numeros[] = 'g';
            }else if($tamanho == 2) {
              $numeros[] = 'h';
            }else{
              $numeros[] = 'i';
          }
        break;
        case 5:
            $tamanho = strlen($value);
            if($tamanho == 1){
              $numeros[] = 'j';
            }else if($tamanho == 2) {
              $numeros[] = 'k';
            }else{
              $numeros[] = 'l';
          }

        break;
        case 6:
            $tamanho = strlen($value);
            if($tamanho == 1){
              $numeros[] = 'm';
            }else if($tamanho == 2) {
              $numeros[] = 'n';
            }else{
              $numeros[] = 'o';
          }
        break;
        case 7:

          $tamanho = strlen($value);
          if($tamanho == 1){
            $numeros[] = 'p';
          }else if($tamanho == 2) {
            $numeros[] = 'q';
          }else if($tamanho == 3){
            $numeros[] = 'r';
          }else{
            $numeros[] = 's';
            }
         break;
        case 8:
            $tamanho = strlen($value);
          if($tamanho == 1){
            $numeros[] = 't';
          }else if($tamanho == 2) {
            $numeros[] = 'u';
          }else{
            $numeros[] = 'v';
            }
         break;

        case 9:
            $tamanho = strlen($value);
          if($tamanho == 1){
            $numeros[] = 'w';
          }else if($tamanho == 2) {
            $numeros[] = 'x';
          }else if($tamanho == 3){
            $numeros[] = 'y';
          }else{
            $numeros[] = 'z';
            }
         break;

        case "/" :
            $numeros[] = ' ';
        break;
      }

  }
       

foreach ($numeros as $value){
    
  echo  $value;
    
}

