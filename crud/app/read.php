<?php include 'bd/conexion.php'; ?>
<?php 
	//consulta los datos de la tabla users 
	$sql="SELECT * FROM users AS U
	LEFT JOIN profiles AS P ON U.id_profile = P.id_profile
	ORDER BY U.id_user DESC";
	$res=$conn->query($sql);
	$i=0;
	if ($res->num_rows > 0) {
		while ($row = $res->fetch_assoc()) { 
			$i++;
		 ?>
			<tr>
				<td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['profile']; ?></td>
                <td><?php echo $row['user']; ?></td>
                <td>
                	<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEdit" onclick="editUser(<?php echo $row['id_user']; ?>)">Editar</button>
                	<button type="button" class="btn btn-danger" onclick="deleteUser(<?php echo $row['id_user']; ?>)">Eliminar</button>                	
                </td>
                
            </tr>
		<?php 
		}
	}
?>