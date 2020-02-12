<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<section>
		<div class="container">
			
			<div class="text-center"><h1>CRUD</h1></div>
			
			<!-- Button para modal de nuevo registro -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
			  Nuevo usuario
			</button>

			<br><br>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
		                <th>#</th>
		                <th>Nombre</th>
		                <th>Perfil</th>
		                <th>Usuario</th>
		                <th>Acciones</th>                
		            </tr>
		        </thead>
		        <tbody>
		        	<!-- manda a llamar al archivo que contiene los datos de los usuarios-->
		        	<!-- este archivo se encarga de hacer ek llenado de la tabla -->
		            <?php include 'app/read.php' ?>            
		            
		        </tbody>
		        
		    </table><!--end table-->
		</div>
	</section>
	
	<!-- Modal nuevo -->
	<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
			  <div class="form-group">
			    <label for="selectProfile">Perfil</label>
			    <select class="form-control" id="selectProfile">
			    	<?php 
			    		$sql="SELECT * FROM profiles";
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
			    <label for="inputName">Nombre</label>
			    <input type="text" class="form-control" id="inputName" >
			  </div>
			  <div class="form-group">
			    <label for="inputUser">Usuario</label>
			    <input type="text" class="form-control" id="inputUser" >
			  </div>			  
			  					  
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-primary" onclick="saveUser()">Guardar</button>
	      </div>	      
	    </div>
	  </div>
	</div>

	<!-- Modal edit -->
	<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div id="dataUSer"></div>	      
	    </div>
	  </div>
	</div>

	<div id="respuesta"></div>
	<!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>

	<!-- ** MANDA A LLAMAR AL ARCHIVO CON LAS FUNCIONES PARA LO BOTONES**-->
    <script type="text/javascript" src="js/functions.js"></script>    
     
    <script>

    	$(document).ready(function() {    		
		    $('#example').DataTable();
		} );


    	
    </script>
</body>
</html>