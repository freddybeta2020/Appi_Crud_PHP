<?php
//echo 'Informacion: ' . file_get_contents('php://input');
header("Content-Type: application/json"); 
include_once("../clases/class_usuarios.php");   
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST'://Guardar        
         $_POST = json_decode(file_get_contents('php://input'), true) ;
         $usuario = new Usuario($_POST["nombre"],$_POST["apellido"],$_POST["fechaNacimiento"],$_POST["pais"]);
         $usuario->guardarUsuario();
         $resultado["mensaje"] = "Guardar usuario, Informacion: " . json_encode($_POST) ;
         echo json_encode($resultado);
        break;
    case 'GET'://Buscar uno o Todos los usuarios
        if (isset($_GET['id'])){          
            Usuario ::obtenerUsuario($_GET['id']);        
         }else{
            Usuario::obtenerUsuarios();       
         }
        break;
    case 'PUT'://Para actualizar un usuario
        $_PUT = json_decode(file_get_contents('php://input'), true) ;
        $usuario = new Usuario($_PUT["nombre"],$_PUT["apellido"],$_PUT["fechaNacimiento"],$_PUT["pais"]);
        $usuario->actualizarUsuario($_GET['id']);        
        $resultado["mensaje"] ="Actualizar un usuario con el id: " .$_GET['id'].
                               ",  Informacion a actualizar: " .json_encode($_PUT);
                               echo json_encode($resultado);
        break;
    case 'DELETE'://Para eliminar un usuario
        Usuario::eliminarUsuario($_GET['id']);
        $resultado["mensaje"] = "Eliminar un usuario con el id: " .$_GET['id'];
        echo json_encode($resultado);
        break;        
  
}

