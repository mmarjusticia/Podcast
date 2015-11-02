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
        <div id="paginaEntrar">
            <div id="arribaEntrar"></div>
        <?php 
            if(!$sesion->isLogged()){
                ?>
        
            
            
                <form  name="login" action="phplogin.php" method="POST">
                  <div id="etiqueta">
                    <div id="usuario">
                        <span>Usuario:</span>
                        <input type="text" name="user" value="" placeholder="Usuario:"/>
                    </div>
                    <div id="contrasena">
                        <span>Password:</span>
                        <input type="password" name="password" value="" placeholder="Password:"/>
                    </div>
                    <div id="enviar">
                    <input type="submit" value="Login" name="login" id="send"/>
                    </div>
                  </div>
                </form>
            
            
           <?php 
            } else{
        ?>  
                <a href="phplogout.php">logout</a>
                <?php 
                    }
                ?>
        </div>           
    </body>
</html>