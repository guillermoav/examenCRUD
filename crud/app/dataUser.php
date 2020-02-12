<?php include '../bd/conexion.php'; ?>
<?php 
	//obtiene los valores enviados
	$idUser = $_POST['id']; 
	
	//se declara y ejecuata la sentencia
	$sql="SELECT * FROM users AS U
	INNER JOIN profiles AS P ON U.id_profile = P.id_profile
	WHERE U.id_user = $idUser";
	$res2=$conn->query($sql);
	if ($res2->num_rows > 0) {
		while ($row2 = $res2->fetch_assoc()) { 
			$idProfile = $row2['id_profile'];
			$profile = $row2['profile'];
			$name = $row2['name'];
			$user = $row2['user'];
		}
	}
?>

<div class="modal-body">
    <form>
	  <div class="form-group">
	    <label for="selectProfileUpdate">Perfil</label>	    
	    <select class="form-control" id="selectProfileUpdate">
	    	<option value="<?php echo $idProfile ?>"><?php echo $profile ?></option>
	    	<?php	    		
	    		$sql="SELECT * FROM profiles WHERE id_profile != $idProfile";
				$res=$conn->query($sql);

				if ($res->num_rows > 0) {
					while ($row = $res->fetch_assoc()) { ?>
						<option value="<?php echo $row['id_profile']; ?>"><?php echo $row['profile']; ?></option>
					<?php 
					}
				}
	    	?>			      
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="inputNameUpdate">Nombre</label>
	    <input type="text" class="form-control" id="inputNameUpdate" value="<?php echo $name; ?>">
	  </div>
	  <div class="form-group">
	    <label for="inputUserUpdate">Usuario</label>
	    <input type="text" class="form-control" id="inputUserUpdate" value="<?php echo $user; ?>">
	  </div>			  
	  					  
	</form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="updateUser(<?php echo $idUser ?>)">Actualizar</button>
</div>