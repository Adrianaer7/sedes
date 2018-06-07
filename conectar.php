<?php

$sql=new mysqli('127.0.0.1','root','','sedes');
$res=$sql ->query("SELECT * FROM usuarios");

while($f= $res-> fetch_object()){        // recorrer datos de bd

	echo$f-> dni.'<br>';
	echo$f-> nombre.'<br>';
	echo$f-> apellido.'<br>';
	echo$f-> pais.'<br>';
}




?>