<?php
   require 'vendor/autoload.php';
   use \Firebase\JWT\JWT;
   //echo json_encode($_SERVER);
$_REQUEST_method= $_SERVER['REQUEST_METHOD'];
$opciones_get="utilice una de las seguientes opciones";
$path_info= $_SERVER['PATH_INFO'];
$respuesta = new stdClass;
$respuesta->status = 'succes';
//$respuesta->data = $datos;
//$datos;


if($_REQUEST_method == 'GET'){
    if(empty($_SERVER['PATH_INFO'])){
        echo $opciones_get;
    }else{
        $path_info = $_SERVER["PATH_INFO"];

        switch($path_info)
        {
            case "/stock":
                $archivo= fopen("datos.json",'a+');
                while(!feof($archivo)){
                    echo fgets($archivo);
                }
                fclose($archivo);
            break;
        }
    }
}else if($_REQUEST_method == 'POST'){
    switch($path_info){
        case '/stock':

           //$datos= $_POST['nombre'].'@'.$_POST['apellido'];
          //instancio PERSONA

           $stock= new stdClass;
           $stock->producto = $_POST['nombre'];
           $stock->marca =$_POST['marca'];
           $stock->precio =$_POST['precio'];
           $stock->unStock->$_POST['stock'];
           $stock->foto->$_POST['foto'];

        // Leo archivo
           $archivo=fopen('stock.json','r');

           echo filesize('stock.json');

           $listaDeProductos= fread($archivo,filesize('stock.json')); //12

          // echo $listaDePersonas;
                 //convierto string a Array
           $listaDeProductos= json_decode($listaDeProductos);
          // inserta Persona
           array_push($listaDeProductos, $stock);
           $retorno = $listaDeProductos;

          fclose($archivo);

           $archivo = fopen('stock.json','w');// antes empece con r luego para que se pisen los datos se ingresa W
               
          $retorno= fwrite($archivo,json_encode($listaDeProductos));

           fclose($archivo);
           // escribo archivo
           $respuesta->data = $retorno;

       echo json_encode($respuesta);
        break;
    }
}


?>