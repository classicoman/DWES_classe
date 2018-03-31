<?php
   session_start();
   if (!isset($_SESSION['myusername'])) {
   	include 'login.php';
   	exit;
   }

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<body>
<head>
	<title>Biblioteca Personal 1.0</title>
	<link rel="stylesheet" type="text/css" href="estils.css"/>
</head>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <img src="images/fenix.png" alt="Logo"/>
        </div>
        <div id="title">Biblioteca Personal 1.0</div>
        <div id="username">Username=not needed</div>
    </div>
    

<?php 


//Funcions prèvies
// *ref* https://www.w3schools.com/php/php_form_validation.asp
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}		


//Funcions de connexió, consulta i inserció a Base de Dades


require_once 'bdd.php';

//Variables Globals
//APUNTS - http://php.net/manual/es/language.variables.scope.php
$conn = "";


$pagina = "list";
if (isset($_GET['pag'])) {	
	$pagina = $_GET['pag'];
}




if ( !connectaBD() ) {
	echo 'Ha fallat la connexió a la base de dades';
}



switch($pagina) {

	case "addpag":
		
		include 'llibres_add.php';
		exit;
		
	break;
	
	
	case "list":
	case "addreg";
	case "del":
		
	// ELIMINAR REGISTRE SI ESCAU
		if ($pagina == "del") {	
			if (!isset($_GET['id'])) {
				echo "No s'ha definit el id de la fila a esborrar";
				exit;
			} else {
				//Esborra la fila
				esborraLlibreBD($_GET['id']);
			}		
		}	
		

	// AFEGIR REGISTRE SI ESCAU
		if ($pagina == "addreg") {			
		
			// *ref* https://www.w3schools.com/php/php_forms.asp
			// *ref* https://www.w3schools.com/php/php_form_validation.asp		
		
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  $titol = test_input($_POST["titol"]);
			  $autor = test_input($_POST["autor"]);
			  
			  
			  insertaLlibreBD($titol,$autor);
			  
			}
			
		}
	
		$result = consultaLlibresBD();
		
		//Imprimeix els registres de la taula
		
		
		echo "<table border=1>
				<tr><td>Títol</td><td>Autor</td><td>id</td></tr>";

		
		if ($result->num_rows > 0) {
		  	// output data of each row
		  	while($row = $result->fetch_assoc()) {
		  		echo "<tr><td>" . $row["titol"] . "</td><td>" . $row["autor"] . "</td>
		  				    <td><a href='index.php?pag=del&id=" . $row["id"] . "'>" . $row["id"] . "</a><td></tr>";
		  	}
		}
		
		echo "</table>";
		
		if ( !tancaBD() ) {
			echo 'Error en tancar la base de dades';
		}	
	
	break;
   
   default:
   	echo "Error en el parametre 'pag'";
   break;
}


?>
    
    <a href="index.php?pag=addpag"><button>Nou Registre</button></a><br><br>
    <a href="logout.php"><button>Logout</button></a>    
</div>
</body>
</html>