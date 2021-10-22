<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco ="bdlogin"

$dbcon = new MySql("$host","$usuario","$senha","$banco");

if($dbcom->connect_error){
	echo "erro_de_conexão";
}

?>