<?php
require '../clases/AutoCarga.php';
$sesion = new Session();

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuario Subir</title>
         <link rel="stylesheet" href="../estilos/estilo.css"/>
    </head>
    <body>
        <div id="contenedorSubir">
            <div id="arribaSubir">  </div>
     
            
        <form action="subir.php" method="post" enctype="multipart/form-data">
                
            <div id="fondoSubir">
                <div id="espacio"></div>
             <div id="cuadro">   
            <div id="categoriaSubir">
                <span>Categoría</span><br><br>
                <div id="selectC">
                <select name="categoria" size="4">
                <option value="rock">Rock</option>
                <option value="pop">pop</option>
                <option value="jazz">Jazz</option>
                <option value="flamenco">Flamenco</option>
                </select>
                </div>
                
            </div>
            <div id="privacidadSubir">
                <span>Privacidad</span><br><br>
                <div id="selectP">
                <select name="privacidad" size="2">
                    
                <option value="privada">privada</option>
                <option value="publica">publica</option>
            </select>
                </div>
            </div>
                 
            <div id="seleccionarSubir">
                <span>Seleccionar</span><br><br>
                <input type="file" name="archivo" id="sel"/><br>
            </div>
                 <div id="U">
                <input type="submit" id="up"/>
                </div>
                    
                 </div>
             
                
         <a href="user.php"><div class="volver">Volver al área de usuario</div></a>
                
            </div>
            
        </form>
        </div>
    </body>
</html>