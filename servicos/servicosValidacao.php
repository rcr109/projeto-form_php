<?php

    function ValidaNome(string $nome) : bool {
        // testando se os dados estão preenchidos
        if (empty($nome)){
            setErrorMessage('O NOME não pode ser vazio. Digite novamente.');
            //$_SESSION['mensagem-de-erro'] = 'O NOME não pode ser vazio. Digite novamente.';
            // envio da resposta a outra página <========|
            //header('location:index.php'); <============|    
            return false;
        }
        // testando tamanho dos textos
        else if (strlen($nome) < 3){
            setErrorMessage('O NOME não pode ter menos que 3 caracteres. Digite novamente.');
            //$_SESSION['mensagem-de-erro'] = 'O NOME não pode ter menos que 3 caracteres. Digite novamente.';
            //header('location:index.php');        
            return false;
        }
        else if (strlen($nome) > 30){
            setErrorMessage('O NOME não pode ter meais que 30 caracteres. Digite novamente.');
            //$_SESSION['mensagem-de-erro'] = 'O NOME não pode ter meais que 30 caracteres. Digite novamente.';
            //header('location:index.php');        
            return false;
        }
        return true;
    }

    function ValidaIdade(string $idade): bool {
        //testando se o valor digitado é numérico
        if (!is_numeric($idade)){
            setErrorMessage('O campo IDADE deve ser preenchido com um valor numérico. Digite novamente.');
            //$_SESSION['mensagem-de-erro'] = 'O campo IDADE deve ser preenchido com um valor numérico. Digite novamente.';
            //header('location:index.php');        
            return false;
        } 
        else if (empty($idade)){
            setErrorMessage('A IDADE não pode ser vazia. Digite novamente.');
            //$_SESSION['mensagem-de-erro'] = 'A IDADE não pode ser vazia. Digite novamente.';
            //header('location:index.php');
            return false;
        }
        return true;
    }

?>