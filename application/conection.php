<?php

session_start();
/** credenciais de acesso ao banco de dados**/
$localhost ="localhost";
$user="";
$password="";
$banco="healthapp";

try{

$pdo = new PDO ("mysql:dbname=".$banco.";host=".$localhost, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
echo "ERRO: " .$e->getMessage();
exit;
}

?>