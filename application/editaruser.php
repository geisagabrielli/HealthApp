<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Usuário');

use \App\Entity\User;

//VALIDAÇÃO DO ID
if(!isset($_GET['profregister']) or !is_numeric($_GET['profregister'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA O USUARIO
$obUser = Unit::getUser($_GET['profregister']);

//VALIDAÇÃO DO USUÁRIO
if(!$obUser instanceof User){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['email'],$_POST['name'],$_POST['surname'],$_POST['profission'],$_POST['profregister'], $_POST['accesskind'],$_POST['place'],$_POST['timeattend'],$_POST['password'],$_POST['situation'])){

  $obUser->email    = $_POST['email']
  $obUser->nome = $_POST['name'];
  $obUser->sobrenome = $_POST['surname'];
  $obUser->Profession     = $_POST['profission'];
  $obUser->RegistroProf     = $_POST['profregister'];
  $obUser->accesskind    = $_POST['accesskind']
  $obUser->Local = $_POST['place'];
  $obUser->Horário     = $_POST['timeattend'];
  $obUser->Senha     = $_POST['password'];
  $obUser->Situacao     = $_POST['situation'];
  $obUser->atualizar();

  header('location: index.php?status=success');
  exit;
}


include __DIR__.'/includes/reglog.php';


