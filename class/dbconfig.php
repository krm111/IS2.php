<?php
//base de datos
$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'SGPF';

//Conectar a la base de datos
$con = mysqli_connect($server,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db($con,$database);

?>
