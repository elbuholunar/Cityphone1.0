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
            $.getJSON("../../config/params.json", function(datos) {  
            	languages = datos["languages"];             	
            	if(document.cookie != ""){
            		var cook = document.cookie.split("=");
            		var len = cook[1];            		
            	}else{            		 
            		var len = "Spanish";
            	} 
               	changeLanguages(len);
            });
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