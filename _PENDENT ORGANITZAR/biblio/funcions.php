<?php


//   Get the table fields in a string, separated by ","
//   If $autoIncrement does not add the first field (id).
function getTableCols($tb, $autoIncrement, $separator=",") 
{
    $sql = "SHOW COLUMNS FROM ".$tb."";
    $result = dbQuery($sql);
    $fields = "";

    $i=0;
    //Composite a string with the names of the fields separated by ','
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) { 	//Imprimeix els noms dels camps de la taula.
        if ( !( $autoIncrement && (!$i) ) )  //Jump first field 'id' because it is an AUTOINCREMENT
            $fields.= $row['Field'].$separator;
        $i++;
    }	  
    //Remove the last ","  
    return substr($fields,0,strlen($fields)-1);
}


?>