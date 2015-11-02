<?php 
require '../clases/AutoCarga.php';
$sesion = new Session();

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../estilos/estilo.css"/>
    </head>
    <body>
         <div id="paginaCampos">
            <div id="arribaCampos"></div>
            <div id="relleno"></div>
        <h2>Usuarios de la podcast de los que puede consultar datos:</h2>
        <div id="lista"
        <ul>
            <?php echo Podcast::ListarNombreUsuarios();
                    ?>
        </ul>
         </div>
        <form action="verCancionesPorCampos.php" method="post" enctype="multipart/form-data">
            <div id="ListarPorNombre">
            <span>Escriba el nombre de usuario del que desea ver canciones</span> 
            <input type="text" name="user" value="Juan"/>
            </div>
              
                <div id="ListarPorCategoria">
                     <span>Categoría</span><br><br>
                <select name="categoria" size="4" id="s">
                <option value="rock">Rock</option>
                <option value="pop">pop</option>
                <option value="jazz" selected="selected">Jazz</option>
                <option value="flamenco">Flamenco</option>
                </select>
                </div>
               <div id="ListarPorprivacidad">
                <span>Privacidad</span><br><br>
                <select name="privacidad" size="2" id="ss">
                <option value="privada" selected="selected">privada</option>
                <option value="publica">publica</option>
            </select>
                <div id="botonEnviar">
                <input type="submit" id="benviar"/>
                </div>
                </div>
         </div>
        </form>
        <ul>
       //<?php
//       $usuario="";
//       
//       $usuario=  Request::post("user");
//       $categoria=  Request::post("categoria");
//       $privacidad=  Request::post("privacidad");
//                    echo Podcast::listarCanciones($usuario, $privacidad, $categoria);
//       ?>
        </ul>
    </body>
</html>
