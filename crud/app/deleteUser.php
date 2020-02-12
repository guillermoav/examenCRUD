<?php include '../bd/conexion.php'; ?>

<?php
	//obtiene los valores enviados
	$id = $_POST['id'];	

	//se declara y ejecuata la sentencia
	$sql = "DELETE FROM users WHERE id_user = $id";
	$res = $conn->query($sql);

	//indica el error en caso de existir
	if (!$res === true) {
		die($conn->error);
	}

?>