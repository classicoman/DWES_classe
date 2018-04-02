<?php
class Vista{
	// Atributos
    private $datos;

    // Métodos
    public function imprimirListado($a) {
    	$this->datos=$a;
    	// Cabecera de un html
    	$this->cabecera();
    	echo "<h2>Listando amigos</h2>";
    	// Imprime una tabla con los datos de la clase
    	echo "<table>";
    	foreach($this->datos as $indice => $registro){
    		echo "<tr>";
			foreach($registro as $campo => $contenido){
				echo "<td>".$contenido."</td>";
			}
			echo "<td><a href=controlador.php?accion=Editar&codigo=".$registro['codigo'].">Editar</a></td>";
			echo "<td><a href=controlador.php?accion=Eliminar&codigo=".$registro['codigo'].">Eliminar</a></td>";
			echo "</tr>";
		}
        echo "</table>";
        // Pie del html
        $this->pie();
    }

    public function imprimirFicha($a) {
    	// transformamos el conjunto de resultados ($a) en una matriz asociativa
    	$fila = $a->fetch_assoc();
    	// Leemos los campos de la unica fila
    	$codigo=$fila['codigo'];
    	$nombre=$fila['nombre'];
    	$salario=$fila['salario'];
    	
    	// Cabecera de un html
    	$this->cabecera();
    	echo "<h2>Insertando o Modificando Amigos</h2>";

    	// Imprime un formulario que coge datos del amigo
    	echo "<form name=formulario method=post action=controlador.php>";
    	echo "<table>";
		echo "<tr><td>Nombre:  <input type=text name=nombre value='".$nombre."''></td></tr>";
    	echo "<tr><td>Salario: <input type=text name=salario value=".$salario.">";
    	echo "<input type=hidden name=codigo value=".$codigo."></td></tr>";
    	// ¿Cambiamos (editar) o Insertamos?
    	if ($codigo>0) 
    		echo "<tr><td><input type=submit name=boton value='Cambiar'></td></tr>";
    	else
    		echo "<tr><td><input type=submit name=boton value='Insertar'></td></tr>";
    	echo "</table>";
        echo "</form>";
        // Pie del html
        $this->pie();
    }


    public function cabecera(){
    	// Imprime la cabecera de una pagina HTML
    	echo "<html><head>";
    	echo "<link rel=stylesheet type=text/css href=estilos.css media=screen />";
    	echo "</head><body>";
    	echo "<h1>MANTENIMIENTO DE LA TABLA AMIGOS</h1>";
    	// El menu superior
    	echo "<ul>";
    	echo "<li><a href=controlador.php>Listar</a></li>";
    	echo "<li><a href=controlador.php?accion=Insertar>Insertar</a></li>";
    	echo "</ul>";
    }

    public function pie(){
    	// Imprime el pie de una pagina HTML
    	echo "</body></html>";
    }


}



?>