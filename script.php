<?php

   $categorias = [];
   $categorias [] = 'infantil';
   $categorias [] = 'adolescente';
   $categorias [] = 'adulto';
   $categorias [] = 'idoso';

   $nome = $_POST['nome'];
   $idade = $_POST['idade'];

    // testando se os dados estão preenchidos
    if (empty($nome)){
       echo "O nome não pode ser vazio.";
       return;
    }
   if (empty($idade)){
       echo "A idade não pode ser vazia.";
       return;
    }

   // testando tamanho dos textos
    if (strlen($nome) < 3){
       echo "O nome deve conter ao menos 3 caracteres.";
       return;
    }
    if (strlen($nome) > 30){
       echo "O nome deve conter no máximo 30 caracteres.";
       return;
    }

   //testando se o valor digitado é numérico
    if (!is_numeric($idade)){
      echo "Digite um valor numérico para a idade.";
      return;
    } 




   if ($idade >= 6 && $idade <= 12){
       for ($i=0 ; $i < count($categorias); $i++){
           if ($categorias[$i]=='infantil'){
               echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
           }
       }
   } else if ($idade >= 13 && $idade <= 18){
       for ($i=0 ; $i < count($categorias); $i++){
           if ($categorias[$i]=='adolescente'){
               echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
           }
       }
   } else if ($idade >= 19 && $idade <= 60){
       for ($i=0 ; $i < count($categorias); $i++){
           if ($categorias[$i]=='adulto'){
               echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
           }
       }
   } else if ($idade >=61){
       for ($i=0 ; $i < count($categorias); $i++){
           if ($categorias[$i]=='idoso'){
               echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
           }
       }
   }

?>