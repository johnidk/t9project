<?php 

$dados = $_POST['dados'];

$dados= "222 22 2 333 33 3 444 44 4 555 55 5 666 66 6 777 77 7 888 88 8 999 99 9 000 00 0"

$arrayDados= explode(" ", $dados)
$numero = array();

   foreach ($arrayDados as $value){

      switch($value[0]){

        case:2

            $tamanho = strlen($value);
            if($tamanho == 1){
              $numeros[] = 'a';
            }else if($tamanho == 2) {
              $numeros[] = 'b';
            }else{
              $numeros[] = 'c';
            }

        case:3

            $tamanho = strlen($value);
            if($tamanho == 1){
              $numeros[] = 'd';
            }else if($tamanho == 2) {
              $numeros[] = 'e';
            }else{
              $numeros[] = 'f';
            }

        case:4
            
            $tamanho = strlen($value);
            if($tamanho == 1){
              $numeros[] = 'g';
            }else if($tamanho == 2) {
              $numeros[] = 'h';
            }else{
              $numeros[] = 'i';
          }

        case:5
            $tamanho = strlen($value);
            if($tamanho == 1){
              $numeros[] = 'j';
            }else if($tamanho == 2) {
              $numeros[] = 'k';
            }else{
              $numeros[] = 'l';
          }


        case:6

        case:7

        case:8

        case:9

        case:0
        
      }

  }
       
      

