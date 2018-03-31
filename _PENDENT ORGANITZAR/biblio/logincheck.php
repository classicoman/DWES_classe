<?php
require_once 'bdd.php';

//Variable global necessària.
global $conn;


if ( !connectaBD() ) {
	echo 'Ha fallat la connexió a la base de dades';
}

# Revisar si el nom d'usuari és alfanumèric (això vol dir que ni guions ni guions baixos poden emprar-se
# pels noms d'usuari, si volgues fer això hauria d'emprar expressions regulars (mirar pàg 291 llibre)
$clean = array();
if (ctype_alnum( $_POST['myusername'] )) {
 	$clean['username'] =  $_POST['myusername'];
} else {
	echo "format del nom d usuari incorrecte, no alfanumeric";
   exit;
}

$mysql = array();
$mysql['username'] =  $clean['username']; //mysqli_real_escape_string( $clean['username'] );

$result = consultaUsuari( $mysql['username'] ,$_POST['mypassword']);
		
		
if ($result->num_rows > 0) {
		  	// output data of each row
	while($row = $result->fetch_assoc()) {
		
		/*usuari i contrasenya correctes*/
		
		//Estableixo l'inici de la sessió, que expira per defecte en 180 minuts.
      session_start();
		$_SESSION['myusername'] = $mysql['username'] ;
		
    //Creo una cookie amb el nom d'usuari. Aquesta cookie s'enviarà al browser amb la primera pàgina de contingut. Després, cada vegada que l'usuari
    //demani la  pagina main.php durà la cookie establerta.
    
    //setcookie($_POST['myusername'], "OK", time() + 3600);  /* expira en 1 hora */ 
    
    


?>
<!-- botam a index una vegada hem iniciat sessió -->
<script>window.location = "../biblio/index.php";</script>
<?php
	}
	
} else {
   echo "Usuari i/o contrasenya incorrectes";
   exit;
}

		
if ( !tancaBD() ) {
	echo 'Error en tancar la base de dades';
}	

?>