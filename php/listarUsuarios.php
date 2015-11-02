<?php 
require '../clases/AutoCarga.php';
$sesion = new Session();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilos/estilo.css"/>
        <title></title>
    </head>
    <body>
         <div id="paginaUsuarios">
            <div id="arribaUsuarios"></div>
        <ul>
            <h3>Haga click sobre el usuario para ver su música pública:</h3>
            <?php
            echo Podcast::ListarUsuarios();
            $var=  Request::get('nombre');?>
            <h3>Canciones:</h3>
            <?php
            echo Podcast::listarPorPrivacidad($var, "publica");
            $cancion=  Request::get('src');
            ?>
        </ul>            
            <audio src="<?php echo $cancion?>" controls autoplay></audio>
            <a href="user.php"><div class="volver">Volver al área de usuario</div></a>
         </div>
    </body>
</html>
