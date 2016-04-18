		var languages = [];
		
		function changeLanguages(len){	

				switch(len) {
					    case "Spanish":
					        $.getJSON("../../config/paramsEs.json", function(datos) {  
				            	languages = datos; 
				            	changeLan();
				            });
					        break;
					    case "English":
					        $.getJSON("../../config/paramsEn.json", function(datos) {  
				            	languages = datos; 
				            	changeLan();
				            });
					        break;
					    case "French":
					        $.getJSON("../../config/paramsFr.json", function(datos) {  
				            	languages = datos; 
				            	changeLan();
				            });
					        break;
					    default:					         
					        console.log("fffff");
					         $.getJSON("../../config/paramsEs.json", function(datos) { 
				            	languages = datos; 
				            	changeLan();
				            });
				}  	
				
		}
		function changeLan(){			
				$(".changeLanguages").each(function( field ) {
					if(this.type == "text" || this.type == "password"){						
						$(this).prop("placeholder",languages["buttons"][this.id]);						
					}else if(this.type == "submit" || $( this ).type == "button"){
						$(this).val(languages["buttons"][this.id]);
					}else if(this.type == undefined){
						$(this).html(languages["buttons"][this.id]);
					}
								  	
				});
		}

		function lee_json() {
			if(document.cookie != ""){
            		var cook = document.cookie.split("=");
            		var len = cook[1]; 
            		changeLanguages(len);
            	}else{ 
				    changeLanguages("Spanish");
            	}   
        }
        lee_json();

		$(function(){
			$(".btn-languages").click(function lenguage(){				
				var button = this.alt;
				var len = ""
				if(button == "es-co"){
					len = "Spanish"					
				}else if(button == "en-us"){
					len = "English"
				}else{
					len = "French"
				}
				document.cookie="lan="+len+";max-age=3600; path=/";
               	changeLanguages(len);				
			});

		});