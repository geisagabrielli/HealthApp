<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Unidade');

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
if(isset($_POST['unitcod'],$_POST['kindplace'],$_POST['state'],$_POST['address'],$_POST['specialit'])){

   $obUnit->titulo    = $_POST['unitcod']
  $obUnit->descricao = $_POST['kindplace'];
  $obUnit->ativo     = $_POST['state'];
  $obUnit->ativo     = $_POST['address'];
  $obUnit->ativo     = $_POST['specialit'];
  $obUnit->atualizar();

  header('location: index.php?status=success');
  exit;
}


include __DIR__.'/includes/unitreg.php';


