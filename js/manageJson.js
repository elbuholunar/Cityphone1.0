		var languages = [];
		
		function changeLanguages(len){			

				$(".changeLanguages").each(function( field ) {	
					console.log(this.id);		
					if(this.type == "text" || this.type == "password"){						
						$(this).prop("placeholder",languages[len]["buttons"][this.id]);						
					}else if(this.type == "submit" || $( this ).type == "button"){
						$(this).val(languages[len]["buttons"][this.id]);
					}else if(this.type == undefined){
						$(this).html(languages[len]["buttons"][this.id]);
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
            		var len = "Spanish-co";
            	}
            	$.getJSON("../../config/params.json", function(datos) {  
            	languages = datos["languages"];
               	changeLanguages(len);
            });
            	//changeLanguages(len);
        }      

		$(function(){			
			$(".btn-languages").click(function lenguage(){				
				var button = this.alt;
				var len = ""
				if(button == "es-es"){
					len = "Spanish"					
				}else if(button == "es-co"){
					len = "Spanish-co"
				}else if(button == "en-us"){
					len = "English"
				}else if(button == "en-br"){
					len = "English-br"
				}else{
					len = "French"
				}
				document.cookie="lan="+len+";max-age=3600; path=/";
               	changeLanguages(len);				
			});

		});

		 lee_json();