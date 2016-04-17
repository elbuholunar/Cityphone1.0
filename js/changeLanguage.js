		function changeLanguages(len){
			// Dar valores a los botones de acuerdo al lenguaje
				$("#quien").html(languages[len]["buttons"]["about"]);
				$("#contactenos").html(languages[len]["buttons"]["ContactUs"]);	
				$("#buscar").prop("placeholder",languages[len]["buttons"]["search"]);
				$("#btnBuscar").html(languages[len]["buttons"]["buttonSearch"]);
				$("#configuracion").html(languages[len]["buttons"]["Configurations"]);
				$("#sesion").html(languages[len]["buttons"]["sesion"]);				
				$("#titulo").html(languages[len]["buttons"]["title"]);
				$("#subtitulo").html(languages[len]["buttons"]["subtitle"]);
				$("#crear").html(languages[len]["buttons"]["createUser"]);
				$("#actualizar").html(languages[len]["buttons"]["showUsers"]);
				$("#ver").html(languages[len]["buttons"]["updateUser"]);
				$("#eliminar").html(languages[len]["buttons"]["deleteUser"]);
		}