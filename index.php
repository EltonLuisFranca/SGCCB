<?php
  $titulo = "Inicio";
  $pagina = "INICIO";
  $ativo = "INICIO";
  
  //Chamando o Headar
  require_once 'includes/header.php';
  require_once 'includes/index.php';

  include("Classes/conexao.class.php");

  //Conectando com o banco de dados
  $conexao = new conexao;
  $conexao->conectar();


  require_once 'includes/scripts.php';
  require_once 'includes/footer.php';
?>
