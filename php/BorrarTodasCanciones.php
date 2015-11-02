<?php 
require '../clases/AutoCarga.php';
$sesion = new Session();
$usuario=$sesion->getUser();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilos/estilo.css"/>
        <title></title>
    </head>
    <body>
      <div id="paginaAdminBorrar">
            <div id="arribaAdminBorrar"></div>
            
            <h3>Pinche sobre el usuario del que quiere borrar canciones</h3>
            <ul>
            <?php            
                echo Podcast::ListarUsuarios();
                $var=  Request::get('nombre');
             ?>
            </ul>
            <h3>Pinche sobre la canción que desea borrar y se borrará automáticamente</h3>
            <ul>
            <?php
                echo Podcast::listarPorPrivacidad($var, "publica");
                echo Podcast::listarPorPrivacidad($var, "privada");
                $cancion=  Request::get('src');
            //echo Podcast::ListarUsuarios();
            ?>
            </ul>
        <?php 
                if(file_exists($cancion)){
                    unlink($cancion);
                    header('Location:borrarTodasCanciones.php');
                }
        ?>
            <a href="admin.php"><div class="volver">Volver al área de administrador</div></a>
      </div>
    </body>
</html>
