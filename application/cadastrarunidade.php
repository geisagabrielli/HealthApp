<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar unidade');

use \App\Entity\Unit;
$obUnit = new Unit;

//VALIDAÇÃO DO POST
if(isset($_POST['unitcod'],$_POST['kindplace'],$_POST['state'],$_POST['address'],$_POST['specialit'])){

  $obUnit->titulo    = $_POST['unitcod']
  $obUnit->descricao = $_POST['kindplace'];
  $obUnit->ativo     = $_POST['state'];
  $obUnit->ativo     = $_POST['address'];
  $obUnit->ativo     = $_POST['specialit'];
  $obUnit->cadastrar();

echo"<pre>";print_r($obUnit);echo"</pre>";exit;

  header('location: index.php?status=success');
  exit;
}


include __DIR__.'/includes/unitreg.php';
