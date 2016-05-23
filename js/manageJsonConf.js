		var languages = [];
		
		function changeLanguages(len){					
				switch(len) {
					    case "Spanish":
					        $.getJSON("../../config/paramsEs.json", function(datos) {  
				            	languages = datos; 
				            	changeLan();
				            });
					        break;
					    case "Spanish-Co":
					        $.getJSON("../../config/paramsEs-Co.json", function(datos) {  
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
					    case "English-Br":
					        $.getJSON("../../config/paramsEn-Br.json", function(datos) {  
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
            		var cookiess = document.cookie.split(';');
            		for(var index in cookiess) {				
   						 if( /lan/.test(cookiess[index]) ){
            				var cook = cookiess[index].split("=");
            				var len = cook[1];             				 
            			}
					}  		
            }else{ 
				    var len = "Spanish-Co";
            }  
            //console.log("en leer json.. " + len);
            changeLanguages(len); 
        }
       

		$(function(){			
			$(".btn-languages").click(function lenguage(){				
				var button = this.alt;
				var len = ""
				if(button == "es-es"){
					len = "Spanish"					
				}else if(button == "es-co"){
					len = "Spanish-Co"
				}else if(button == "en-us"){
					len = "English"
				}else if(button == "en-br"){
					len = "English-Br"
				}else{
					len = "French"
				}
				document.cookie="lan="+len+";max-age=3600; path=/";
               	changeLanguages(len);				
			});

		});

		// Invoca el metodo para cargar o crear la cookie
		lee_json();