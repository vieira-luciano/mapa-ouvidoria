<?php

//validar
function consultar($connection, $protocolo)
{
	// validando protocolo para apenas receber numeros e letras
	// usando expressao regular para filtro
	$protocolo = preg_replace("/[^a-zA-Z0-9]+/", "", $protocolo);

	// preparando SQL
	$sql = "select * from ouvidoria where protocolo = '%s'";
	$sql = sprintf($sql, $protocolo);

	// executando SQL
	$consulta = mysqli_query($connection, $sql);
	
	if ($consulta) {
		return mysqli_fetch_assoc($consulta);
	}

	return false;
}

