<?php
  // Llamada al WebService
  $client = new SoapClient("http://www.sipcolombia.net.co/Ejemplo/index.php?wsdl");
  $result = $client->test();
  var_dump($result);
  //$xml = $result;
  // procesar xml
  /*$xml = simplexml_load_string($xml);
  foreach($xml->Table as $table) 
  {
    $output .= "<p>$table->Name</p>";
  }
  print_r($output);*/

  /*$soapClient = new SoapClient('http://www.sipcolombia.net.co/Ejemplo/index.php?wsdl');
       echo '<B>RESPUESTA DE LA CONEXIÓN</B><br>' ;
    print_r($soapClient);

// para obtener las funciones disponibles en el servicio web
    $functions = $soapClient->__getFunctions();
    print_r($functions); */
?>