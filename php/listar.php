  <?php
require '../clases/AutoCarga.php';
$sesion = new Session();
$user = $sesion->getUser();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilos/estilo.css"/>
        <title></title>
    </head>
    <body>
        <div id="pagina">
            <div id="arriba"></div>
        
        <ul>
            <h2>Canciones privadas</h2>
        <?php
        echo Podcast::listarPorPrivacidad($user->getNombre(),"privada");     
        ?>
            <h2>Canciones públicas</h2>
         <?php
        echo Podcast::listarPorPrivacidad($user->getNombre(),"publica");
        $var=  Request::get('src');
        ?>
       
        </ul>
            <audio src="<?php echo $var?>" controls autoplay></audio>
        <a href="user.php"><div class="volver">Volver al área de usuario</div></a>
        </div>
        
    </body>
</html>
