<?php include '../bd/conexion.php'; ?>

<?php
	//obtiene los valores enviados
	$id = $_POST['id'];
	$idProfile = $_POST['idProfile'];
	$name = $_POST['name'];
	$user = $_POST['user'];

	//se declara y ejecuata la sentencia
	$sql = "UPDATE users SET id_profile = '$idProfile',name = '$name',user = '$user' WHERE id_user = $id";
	$res = $conn->query($sql);

	//indica el error en caso de existir
	if (!$res === true) {
		die($conn->error);
	}

?>