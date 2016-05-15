<?php     
    // Variable que contiene el json de respuesta
    $err[0] = "Error en el request, consulte la documentación";
    $url = str_replace("API/","",$_REQUEST['url']);        
    $parts = explode("/", $url);
    $params = array();
    if ($_SERVER['REQUEST_METHOD'] != "POST" || count($parts) <= 0) { 
        error($err[0],"400",array());        
    }else {             
        $metod = $parts[0]; 
        if(count($parts)>1){
            $subcadena = "/";         
            $posicionsubcadena = strpos ($url, $subcadena);

            $par = substr ($url, ($posicionsubcadena+1)); 
            $parParams = explode("/",$par);            
            for($i = 0; $i < count($parParams); $i++ ){
                $a = explode("=",$parParams[$i]);
                if(count($a) == 2){
                    $params[trim($a[0])] = trim($a[1]);
                }else{
                    error($err[0],"400",$parParams);
                    exit();    
                }
            }

            $metod($params);
        }   
        

    }

    /**
     *  Estructura de ejemplo de metodo
     *  @author Alvaro Bernal
     *  @param {Array} Datos a procesar
     *  @return {Object Json} success or error 
     */
    function prueba($string1){
        //http://localhost/cityphonev1.0/api/prueba/uno=gepeto/dos=es gay
        global $err;  
        // campos a validar separados por comas sin espacios, si falta o sobra algun parametro devulve error//
        $campos = "uno,dos";
        if(count($string1) != 2 || implode(",",array_keys($string1)) != $campos){            
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