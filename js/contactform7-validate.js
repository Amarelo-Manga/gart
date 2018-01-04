
document.addEventListener('wpcf7mailsent', function(event){
		
	var formId = event.detail.contactFormId;
	//form contato
	if( formId == 7308 ){
		location = 'http://gart.com.br/mensagem-enviada/';
	}

	//form Revenda Acesso	
	if( formId == 16989 ){
	
		var email = event.detail.inputs[0].value;
		var validemail = validEmail( email );
	}
			
},false);


function validEmail( email ){

	jQuery.ajax({
	  	url: '/gart/wp-admin/admin-ajax.php',
		type: 'POST',
		dataType: 'html',
		cache: false,
		data: {
			action: 'email_revenda', email: email, 
		},
		success: function(response) {

			if( response == "sim" ){
				createSession();
			}else{
				alert("Por favor faça o Cadastro");
			}

		}
	});
}

function createSession(){

	jQuery.ajax({
	  	url: '/gart/wp-admin/admin-ajax.php',
		type: 'POST',
		cache: false,
		data: {
			action: 'session_revenda', 
		},
		success: function(response) {
			console.log(response);
			if( response == "sim0" ){
				var url = "../revenda";
				window.location.href = url;
			}else{
				alert("erro");
			}
		}
	});
}







