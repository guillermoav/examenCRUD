/**** Funciones con AJAX ***/

function saveUser(){
	//obtiene el valos del form
	var idProfile = $('#selectProfile').val();
	var name = $('#inputName').val();
	var user = $('#inputUser').val();

	//envía los datos
	 $.post('app/saveUser.php',{
	 	idProfile:idProfile,
	 	name:name,
	 	user:user
      },
      function(data){
        $('#respuesta').html(data);
        location.reload();		        
      });
}

function editUser(id){			
	//envía los datos
	 $.post('app/dataUSer.php',{id:id},function(data){$('#dataUSer').html(data);		        
      });
}

function updateUser(id){
	//obtiene el valos del form
	var idProfile = $('#selectProfileUpdate').val();
	var name = $('#inputNameUpdate').val();
	var user = $('#inputUserUpdate').val();

	//envía los datos
	 $.post('app/updateUser.php',{
	 	id:id,
	 	idProfile:idProfile,
	 	name:name,
	 	user:user
      },
      function(data){
        $('#respuesta').html(data);	
        location.reload();	        
      });
}

function deleteUser(id){			
	//envía los datos
	 $.post('app/deleteUSer.php',{
	 	id:id},
	 	function(data){
	 		$('#respuesta').html(data);
	 		location.reload();		        
      });
}