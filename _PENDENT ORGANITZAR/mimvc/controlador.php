<?php
session_start();

//////////////////////////////////////////////////////////////////////////////
// Esta es la página del CONTROLADOR
// El Controlador se encarga de procesar las interacciones del usuario
// y realiza los cambios apropiados en el modelo o en la vista.
///////////////////////////////////////////////////////////////////////////////
// Desde el controlador, importamos el MODELO
// El Modelo representa la información con la que trabaja la aplicación
// es decir, su lógica de negocio.
//////////////////////////////////////////////////////////////////////////////
// Desde el controlador, importamos la VISTA
// La Vista transforma el modelo en una página web 
// que permite al usuario interactuar con ella.
//////////////////////////////////////////////////////////////////////////////
include "modelo.php";
include "vista.php";

// Creamos un objeto de manejo de la base de datos y otro que maneja la vista
$bd1=new BD();
$v1=new Vista();

$bd1->conecta();

// Igual venimos del formulario de Editar/Insertar con datos (el boton pulsado)
// en estos casos, hacemos la operacion solicitada
if (isset($_POST['boton'])){
	if($_POST['boton']=='Cambiar') 
		$orden="UPDATE amigos SET nombre='".$_POST['nombre']."', salario=".$_POST['salario']." WHERE codigo=".$_POST['codigo'];
	if($_POST['boton']=='Insertar') 
		$orden="INSERT INTO amigos (nombre,salario) VALUES ('".$_POST['nombre']."',".$_POST['salario'].")";
	$bd1->ejecuta($orden);
}

// Por GET nos mandan la accion y el codigo del amigo a tratar
if (!isset($_GET['accion'])) $accion='Listar';
else{
	$accion=$_GET['accion'];
	if ($accion=='Editar' or $accion=='Eliminar') $codigo=$_GET['codigo'];
}

///////////////////////////////////
// ¿Qué quiere hacer el usuario?
///////////////////////////////////
if($accion=='Listar'){
	// Ejecutamos una orden SQL y recibimos un Array
	$paquete=$bd1->ejecuta("SELECT codigo,nombre,salario FROM amigos");
	// Mandamos el Array a imprimir a la vista de imprimirListado
	$v1->imprimirListado($paquete);	
}
if($accion=='Eliminar'){
	// Eliminamos al registro $codigo y venimos otra vez aqui
	$bd1->ejecuta("DELETE FROM amigos WHERE codigo=".$codigo);
	header('Location: controlador.php');
}
if($accion=='Editar'){
	// Editamos al amigo $codigo. Buscamos los datos del amigo implicado
	$pollo=$bd1->ejecuta("SELECT codigo,nombre,salario FROM amigos WHERE codigo=".$codigo);
	// Mostramos la vista imprimirFIcha
	$v1->imprimirFicha($pollo);
}
if($accion=='Insertar'){
	// Insertando. Hacemos algo parecido a editar pero mandando 0
	$pollo=$bd1->ejecuta("SELECT 0 AS codigo,'' AS nombre,0.00 AS salario");
	$v1->imprimirFicha($pollo);
}

// Desconectamos de la BD
$bd1->desconecta();

?>
