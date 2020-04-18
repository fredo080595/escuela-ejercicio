<?php  


function conexion(){

	$conexion = mysqli_connect('localhost','root','','escuela');
	return $conexion;

}

function insertarDatosMatricula($matricula,$clave){

	$conexion = conexion();
	$sql = "insert into director (dior_matricula) values ('$matricula')";
	$result = mysqli_query($conexion,$sql);

	if($result){
		$datos = buscarId($matricula);

		if (count($datos) > 0) {
			return InsertaClave($datos['dior_id_director'],$clave);
		}else{
			return false;
		}

	}else{
		return false;
	}

}


function buscarId($matricula){

	$conexion = conexion();
	$sql = "select dior_id_director from director where dior_matricula = '$matricula'";
	$result = mysqli_query($conexion,$sql);

	$datos = mysqli_fetch_array($result);

	return $datos;

}


function InsertaClave($id_director,$clave){
	$conexion = conexion();
	$sql = "insert into profesor (pror_clave,pror_id_director) values ('$clave','$id_director')";
	$result = mysqli_query($conexion,$sql);

	if ($result) {
		return true;
	}else{
		return false;
	}

}


