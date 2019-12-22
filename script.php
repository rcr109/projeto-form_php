<?php

   session_start();

   $categorias = [];
   $categorias [] = 'infantil';
   $categorias [] = 'adolescente';
   $categorias [] = 'adulto';
   $categorias [] = 'idoso';

   $nome = $_POST['nome'];
   $idade = $_POST['idade'];

    // testando se os dados estão preenchidos
    if (empty($nome)){
        $_SESSION['mensagem-de-erro'] = 'O NOME não pode ser vazio. Digite novamente.';
        // envio da resposta a outra página
        header('location:index.php');
    }
    else if (empty($idade)){
        $_SESSION['mensagem-de-erro'] = 'A IDADE não pode ser vazia. Digite novamente.';
        header('location:index.php');
        return;
    }
   // testando tamanho dos textos
    else if (strlen($nome) < 3){
        $_SESSION['mensagem-de-erro'] = 'O NOME não pode ter menos que 3 caracteres. Digite novamente.';
        header('location:index.php');        
        return;
    }
    else if (strlen($nome) > 30){
        $_SESSION['mensagem-de-erro'] = 'O NOME não pode ter meais que 30 caracteres. Digite novamente.';
        header('location:index.php');        
        return;
    }

   //testando se o valor digitado é numérico
    else if (!is_numeric($idade)){
        $_SESSION['mensagem-de-erro'] = 'O campo IDADE deve ser preenchido com um valor numérico. Digite novamente.';
        header('location:index.php');        
        return;
    } 

    if ($idade >= 6 && $idade <= 12){
        for ($i=0 ; $i < count($categorias); $i++){
            if ($categorias[$i]=='infantil'){
                $_SESSION['mensagem-de-processamento'] = "O nadador ". $nome. " compete na categoria ". $categorias[$i]. ".";
                header('location:index.php'); 
                return;
                //echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
            }
        }
    } else if ($idade >= 13 && $idade <= 18){
        for ($i=0 ; $i < count($categorias); $i++){
            if ($categorias[$i]=='adolescente'){
                $_SESSION['mensagem-de-processamento'] = "O nadador ". $nome. " compete na categoria ". $categorias[$i]. ".";               
                header('location:index.php'); 
                return;
                //echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
           }
       }
    } else if ($idade >= 19 && $idade <= 60){
        for ($i=0 ; $i < count($categorias); $i++){
            if ($categorias[$i]=='adulto'){
                $_SESSION['mensagem-de-processamento'] = "O nadador ". $nome. " compete na categoria ". $categorias[$i]. ".";
                header('location:index.php'); 
                return;
                //echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
            }
        }
    } else if ($idade >=61){
        for ($i=0 ; $i < count($categorias); $i++){
            if ($categorias[$i]=='idoso'){
                $_SESSION['mensagem-de-processamento'] = "O nadador ". $nome. " compete na categoria ". $categorias[$i]. ".";
                header('location:index.php'); 
                return;
                //echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
            }
        }
    }

?>