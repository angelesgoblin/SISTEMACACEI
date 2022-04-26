<?php

include_once("conexion.php");
//include_once("getData.js");
if($_REQUEST['empid']) {
	$sql = "SELECT id, Estatus, Docente, Departamento, Periodo FROM docsistemas WHERE id='".$_REQUEST['empid']."'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	
	$data = array();
	while( $rows = mysqli_fetch_assoc($resultset) ) {
		$data = $rows;
	}
	echo json_encode($data);
} else {
	echo 0;	
}

/*
$opcion = $_POST["opciones"];

if ($opciones == $docsistema->Periodo) {

	$d="exito";

}
*/

?>