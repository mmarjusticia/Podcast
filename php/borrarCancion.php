<?php 
require '../clases/AutoCarga.php';
$sesion = new Session();
$user=$sesion->getUser();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilos/estilo.css"/>
        <title></title>
    </head>
    <body>
        <div id="paginaBorrar">
            <div id="arribaBorrar"></div>
        
        <h2>Tus canciones privadas</h2>
        <ul>
            
        <?php
        echo Podcast::listarPorPrivacidad($user->getNombre(),"privada");     
        ?>
        </ul>
            <h2>Tus canciones públicas</h2>
        <ul>
         <?php
        echo Podcast::listarPorPrivacidad($user->getNombre(),"publica");
        $var=  Request::get('src');
        ?>
        
        </ul>
            <?php 
            if(file_exists($var)){
                    unlink($var);
                    header('Location:borrarCancion.php');
                }
            ?>
             <a href="user.php"><div class="volver">Volver al área de usuario</div></a>
        </div>
    </body>
</html>
