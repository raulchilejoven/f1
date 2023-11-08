<?php

function conecta()
{
	$link= new mysqli("localhost","user","duoc","encuestas");

//	mysqli_select_db(mysqli $link, string $dbname);
	
	if ($link -> connect_errno) {
	echo "Failed to connect to MySQL: " . $link -> connect_error;
	exit();
	}
	

	return $link;   
}

function consulta($sql)
{
	$linkConsulta = conecta();
	


$respuesta = $linkConsulta -> query($sql);


	if (!$linkConsulta -> query($sql)) {
echo("Error description: " . $linkConsulta -> error);
}
	return $respuesta;
	

}
	




function ingreso($sql)
{
	$linkConsulta = conecta();
	


$respuesta = $linkConsulta -> query($sql);



	return $respuesta;
	


}

?>