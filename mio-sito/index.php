<?php 
    $method = $_SERVER['REQUEST_METHOD'];
    $request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));
    
    switch ($method) {
      case 'PUT':
        do_something_with_put($request);  
        echo"METODO PUT";
      case 'POST':
        do_something_with_post($request);  
        echo"METODO POST";
      case 'GET':
        do_something_with_get($request);  
        becho"METODO GET;
      default:
        handle_error($request);  
        break;
    }



?>