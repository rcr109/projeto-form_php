<?php
   include "servicos/servicosValidacao.php";
   include "servicos/servicosClassificacao.php";
   include "servicos/servicosMensagem.php";

   $nome = $_POST['nome'];
   $idade = $_POST['idade'];

   defineCategoriaCompetidor($nome, $idade);

   header('location: index.php');

?>