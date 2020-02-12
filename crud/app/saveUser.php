<?php include '../bd/conexion.php'; ?>

<?php
	//obtiene los valores enviados
	$idProfile = $_POST['idProfile'];
	$name = $_POST['name'];
	$user = $_POST['user'];

	//se declara y ejecuata la sentencia
	$sql = "INSERT INTO users (id_profile,name,user,status) VALUES('$idProfile','$name','$user',1)";
	$res = $conn->query($sql);

	//indica el error en caso de existir
	if (!$res === true) {
		die($conn->error);
	}

?>