<?php     
    // Variable que contiene el json de respuesta
    $err[0] = "Error en el request, consulte la documentación";
    $url = str_replace("API/","",$_REQUEST['url']);        
    $parts = explode("/", $url);

    if ($_SERVER['REQUEST_METHOD'] != "POST" || count($parts) <= 0) { 
        error($err[0],"400",array());        
    }else {        
        $metod = $parts[0]; 
        if(count($parts)>1){
            $subcadena = "/";         
            $posicionsubcadena = strpos ($url, $subcadena);
            $params = substr ($url, ($posicionsubcadena+1)); 
             $metod(explode("/",$params));
        } else {
            $params = array();
        }    
        
    }


    function prueba($string1){
        if(count($string1) != 2){
            global $err;
            error($err[0],"400",$string1);
        }else{
            header('Content-type: application/json');
             echo json_encode(array('success'=>"success",
                                'data'=> array("1"=>$string1),
                                'message'=> htmlentities("¡Hola, porque tan bola!")
            ));
        }        

    }

    /**
     *  Devulelve el error con el mensaje y código de error
     *  @author Alvaro Bernal
     *  @param {string} mensaje de error
     *  @param {String} Numero de error
     *  @param {Array} Datos a devolver
     *  @return {Object Json}
     */
    function error($msg,$num,$data){
        header('Content-type: application/json');
        echo json_encode(array('success'=>"error",
                                'data'=> $data,
                                'message'=> htmlentities($msg),
                                'error number'=>$num
        ));
    }
	
 ?>