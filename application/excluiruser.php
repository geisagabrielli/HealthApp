<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\User;

//VALIDAÇÃO DO ID
if(!isset($_GET['profregister']) or !is_numeric($_GET['profregister'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA USUARIO
$obUser = Unit::getUser($_GET['profregister']);

//VALIDAÇÃO DO USUARIO
if(!$obUser instanceof Unit){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $obUser->excluir();

  header('location: index.php?status=success');
  exit;
}


include __DIR__.'/includes/confirmar-exclusao.php';
