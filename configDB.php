<?php 
//configDB.php

//dados para escolha de dataBase (DB)
$dbhost = "localhost";
$dbuser = "root";  //Usuario Raíz (rute)
$dbpass = "";
$dbname = "sistemaDeLogin";

//Conexão com o banco de dados 
$conecta = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conecta->connect_error){
    die("Não doi posivel conectar ao banco de dados: " . $conecta->connect_error);
}else{
    echo "<h1>Conectou no BD Manowwwww!</h1>";
}