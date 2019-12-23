<?php

session_start();

// 1 - Funções para criar e obter as mensagens de erro
function setErrorMessage(string $mensagem) : void {
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function getErrorMessage(): ?string {
    if(isset($_SESSION['mensagem-de-erro'])){
        return $_SESSION['mensagem-de-erro'];
    }
    return null;
}

function resetErrorMessage() : void{
    if(isset($_SESSION['mensagem-de-erro'])){
        unset($_SESSION['mensagem-de-erro']);
    }
}
// 1 ==================



// 2 - Funções para criar e obter as mensagens de processamento
function setProcessMessage(string $mensagem) : void {
    $_SESSION['mensagem-de-processamento'] = $mensagem;
}

function getProcessMessage(): ?string {
    if(isset($_SESSION['mensagem-de-processamento'])){
        return $_SESSION['mensagem-de-processamento'];
    }
    return null;
}

function resetProcessMessage() : void{
    if(isset($_SESSION['mensagem-de-processamento'])){
        unset($_SESSION['mensagem-de-processamento']);
    }
}
// 2 ==================





?>