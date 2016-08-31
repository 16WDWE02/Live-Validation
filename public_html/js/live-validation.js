$(document).ready(function(){
	$('#username').blur(findusername);
});

function findusername(){
	//Get the value of the input field
	var usernameValue = $(this).val();

	if(usernameValue.length === 0){
		//Required
		$('#username-message').removeClass('success').addClass('error');
		$('#username-message').html('This field is required');
		return;
	} else {
		$('#username-message').removeClass('error').addClass('success');
		$('#username-message').html('Good to go');		
	}

	//Preparing our data to send through AJAX
	var dataForServer = {
		username:usernameValue
	}

	//Preparing AJAX
	$.ajax({
		//we are sending secure data so this time we will be using post
		type:'post',
		url: 'api/validate-username.php',
		data: dataForServer,
		success:function(dataFromServer){
			console.log(dataFromServer);
			if(dataFromServer === 'success'){
				//The username is avaliable
				$('#username-message').removeClass('error').addClass('success');
				$('#username-message').html('This username is avaliable');
			} else {
				//The username is Unavaliable
				$('#username-message').removeClass('success').addClass('error');
				$('#username-message').html('This username is unavaliable');			
			}
		},
		error: function(){
			console.log('Cannot Connect to Server');
		}
	});

}