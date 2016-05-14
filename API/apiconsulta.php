<?php 
	if(isset($_GET['user']) && intval($_GET['user'])) {

	$format = 'json';
        if($format == 'json') {
            header('Content-type: application/json');
            echo json_encode(array('success'=>"success",
            						'prueba'=>htmlentities("¡Hola, porque tan bola!")
            	));
        }

	}
 ?>