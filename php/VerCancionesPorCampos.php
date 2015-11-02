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
       
            <div id="paginaMostrar">
            <div id="arribaMostrar"></div>
        <?php
       
              
       $usuario=  Request::post("user");
       $categoria=  Request::post("categoria");
       $privacidad=  Request::post("privacidad");
      
       ?>   <?php if ($usuario!=null){?>
            <ul>
                <?php
                    echo Podcast::listarNombreCanciones($usuario, $privacidad, $categoria);
                    $var=  Request::get('src');
                      ?>
                
            </ul><?php }
            else{?>
            <h3>No hay resultados para su busqueda</h3> 
            <?php } ?>
            
            <a href="admin.php"><div class="volver">Volver</div></a>
            </div>
    </body>
</html>
