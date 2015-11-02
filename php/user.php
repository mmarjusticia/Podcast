<?php
require '../clases/AutoCarga.php';
$sesion = new Session();

if(!$sesion->isLogged()){
    $sesion->sendRedirect("login.php");
    exit();
}
$user = $sesion->getUser();
$carpeta='../usuarios/'.$user->getNombre();
$publica='../usuarios/'.$user->getNombre().'/publica';
$privada='../usuarios/'.$user->getNombre().'/privada';
if(!file_exists($carpeta)){
    mkdir($carpeta, 0777, true);
    mkdir($publica, 0777, true);  
    mkdir($privada, 0777, true); 
}    

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilos/estilo.css">
        <title></title>
    </head>
    <body>
        <div id="paginaUser">
            <div id="arribaUser"></div>
        
             
        <div id="caja">
            <a href="userUpload.php"><div id="subirArchivo">Subir canciones</div></a>
            <a href="listar.php"><div id="listarArchivos">Ver y reproducir canciones privadas y públicas</div></a>
            <a href="listarAgrupadas.php"><div id="listarAgrupadas">Ver y reproducir canciones agrupadas por categorías</div></a>
            <a href="listarUsuarios.php"><div id="listarUsuarios">Ver la música de los demás usuarios podcast</div></a>
            <a href="borrarCancion.php"><div id="borrarCanciones">Borrar canciones</div></a>
            <a href="phplogout.php"><div id="borrarCanciones">Cerrar Sesión</div></a>
        </div>
        </div>   
    </body>
</html>
