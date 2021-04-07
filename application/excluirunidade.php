<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Unit;

//VALIDAÇÃO DO ID
if(!isset($_GET['unitcod']) or !is_numeric($_GET['unitcod'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A Unidade
$obUnit = Unit::getUnit($_GET['unitcod']);

//VALIDAÇÃO DA Unidade
if(!$obUnit instanceof Unit){
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
