<?php
/* 
   Fitxer amb funcions de connexió, consulta i inserció a Base de Dades
*/



function connectaBD () {

	global $conn;

	$servername = "localhost";
	$username = "toni";
	$password = "toni";
	
	$basedades = "biblioteca";

	// Create connection
	//*ref* http://php.net/manual/es/mysqli.construct.php
	$conn = new mysqli($servername, $username, $password,  $basedades);

	// Check connection
	if ($conn->connect_error) {
   	die("Connection failed: " . $conn->connect_error);
	}

	return 1;
}



function tancaBD () {
	global $conn;
	
	//*ref* http://php.net/manual/es/mysqli.close.php
	return $conn->close();
}



function consultaLlibresBD () {
	global $conn;
	
	$sql = "SELECT * FROM llibres";
	$result = $conn->query($sql);
	
	return $result;
}



function insertaLlibreBD($titol,$autor) {
	global $conn;

	//*ref* https://www.w3schools.com/PHP/php_mysql_insert.asp
	$sql = "INSERT INTO llibres (titol,autor,ISBN,comprat,data_entrada) 
			  VALUES ('$titol','$autor',12345,'Y','2017-07-17')";

	if ($conn->query($sql) === TRUE) {
   	/* echo "New record created successfully"; */
	} else {
	   echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


function esborraLlibreBD($id) {
	global $conn;
	
	$sql = "DELETE FROM llibres WHERE id='$id'";
	
	if ($conn->query($sql) === TRUE) {
   	/* echo "New record created successfully"; */
	} else {
	   echo "Error: " . $sql . "<br>" . $conn->error;
	}
}



function consultaUsuari($username, $password) {
	global $conn;
	
# Empro sentencies SQL "preparades" per evitar SQL INJECTION	
	

$stmt = $conn->prepare("SELECT * FROM usuaris WHERE nom=? AND password=?");
$stmt->bind_param('ss', $username, $password);
$stmt->execute();	
$result = $stmt->get_result();	
	/*
	$sql = "SELECT * FROM usuaris 
	        WHERE nom='$username' AND password='$password'";
	$result = $conn->query($sql);
*/	
	
	return $result;
}


?>