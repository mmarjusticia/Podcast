<?php 
require '../clases/AutoCarga.php';

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilos/estilo.css"/>
        <title></title>
    </head>
    <body><div id="paginaAdmin">
            <div id="arribaAdmin"></div>
            <div class="enlaces"> <a href="BorrarTodasCanciones.php"><div id="listarUsuarios">Borrar canciones de los usuarios</div></a></div>
            <div class="enlaces"> <a href="ListarPorcategoria.php"><div id="listarUsuarios">Listar canciones especificando campos</div></a></div>
            <div class="enlaces"><a href="phplogout.php"><div id="cerrar">Cerrar Sesión</div></a></div>
            <div id="izq">
        
            <h1>Relación de usuarios del Podcast</h1>
            
            <h3>Pinche sobre el usuario para ver todas sus canciones</h3>
            <ul>
            <?php            
                echo Podcast::ListarUsuarios();
                $var=  Request::get('nombre');
             ?>
            </ul>
            <h3>Relación de canciones </h3>
            <ul>
            <?php
                echo Podcast::listarPorPrivacidad($var, "publica");
                echo Podcast::listarPorPrivacidad($var, "privada");
                $cancion=  Request::get('src');
            //echo Podcast::ListarUsuarios();
            ?>
            </ul>
            <audio src="<?php echo $cancion?>" controls autoplay></audio>
            </div>
            <div id="der">
               
            </div>
            </div>
    </body>
</html>
