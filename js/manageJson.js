		var languages = [];
		function lee_json() {
            $.getJSON("../../config/params.json", function(datos) {            	
            	languages = datos["languages"];  
            	var len = "Spanish"; 
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