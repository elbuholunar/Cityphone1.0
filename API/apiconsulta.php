<?php 
	if(isset($_GET['user']) && intval($_GET['user'])) {

	/* salida de datos en formato json */
	$format = 'json';
        if($format == 'json') {
            header('Content-type: application/json');
            echo json_encode(array('success'=>"success",
            						'prueba'=>"¡Hola, porque tan bola!"
            	));
        }

	}
 ?>