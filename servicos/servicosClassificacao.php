<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string{
    
$categorias = [];
$categorias [] = 'infantil';
$categorias [] = 'adolescente';
$categorias [] = 'adulto';
$categorias [] = 'idoso';


if (validaNome($nome) && validaIdade($idade)){
    resetErrorMessage();
    if ($idade >= 6 && $idade <= 12){
        for ($i=0 ; $i < count($categorias); $i++){
            if ($categorias[$i]=='infantil'){
                setProcessMessage("O nadador ". $nome. " compete na categoria ". $categorias[$i]. ".");
                //$_SESSION['mensagem-de-processamento'] = "O nadador ". $nome. " compete na categoria ". $categorias[$i]. ".";
                //header('location:index.php'); 
                return null;
                //echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
            }
        }
    } else if ($idade >= 13 && $idade <= 18){
        for ($i=0 ; $i < count($categorias); $i++){
            if ($categorias[$i]=='adolescente'){
                setProcessMessage("O nadador ". $nome. " compete na categoria ". $categorias[$i]. ".");               
                //header('location:index.php'); 
                return null;
                //echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
           }
       }
    } else if ($idade >= 19 && $idade <= 60){
        for ($i=0 ; $i < count($categorias); $i++){
            if ($categorias[$i]=='adulto'){
                setProcessMessage("O nadador ". $nome. " compete na categoria ". $categorias[$i]. ".");
                //header('location:index.php'); 
                return null;
                //echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
            }
        }
    } else if ($idade >=61){
        for ($i=0 ; $i < count($categorias); $i++){
            if ($categorias[$i]=='idoso'){
                setProcessMessage("O nadador ". $nome. " compete na categoria ". $categorias[$i]. ".");
                //header('location:index.php'); 
                return null;
                //echo "O nadador ". $nome. " compete na categoria ", $categorias[$i], ".";
            }
        }
    }

    
    
} else {
    resetProcessMessage();
    return getErrorMessage();
}

}

?>