<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Procedimento');

use \App\Entity\Proc;
$obProc = new Proc;

//VALIDAÇÃO DO POST
if(isset($_POST['id'],$_POST['typeproc'],$_POST['nameproc'],$_POST['typeproc1'])){

  $obProc->id    = $_POST['id']
  $obProc->typeproc = $_POST['typeproc'];
  $obProc->nome = $_POST['nameproc'];
  $obProc->typeproc1     = $_POST['typeproc1'];
  $obProc->cadastrar();

echo"<pre>";print_r($obProc);echo"</pre>";exit;

  header('location: index.php?status=success');
  exit;
}


include __DIR__.'/includes/regproc.php';
