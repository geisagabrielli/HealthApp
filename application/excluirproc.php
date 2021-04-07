<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Proc;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA O PROCEDIMENTO
$obProc = Proc::getProc($_GET['ID']);

//VALIDAÇÃO DO PROCEDIMENTO
if(!$obProc instanceof Proc){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $obUnit->excluir();

  header('location: index.php?status=success');
  exit;
}


include __DIR__.'/includes/confirmar-exclusao.php';
