<?php
require '../clases/AutoCarga.php';
   $sesion=new Session;
   $user=$sesion->getUser();
   $nombre=$user->getNombre();
        ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="../estilos/estilo.css"/>
        <title></title>
    </head>
    <body>7
        <div id="paginaAgrupadas">
          <div id="arribaAgrupadas"></div>
         
        <h1>Canciones de Jazz</h1>
        <ul>
            <span> Marcadas como públicas</span><br>
           <?php
        echo Podcast::listarCanciones($nombre, "publica", "jazz");
            ?>
        </ul>
        <ul>
            <span> Marcadas como privadas</span>
              <?php
        echo Podcast::listarCanciones($nombre, "privada", "jazz");
        
            ?>
        </ul>
         <h1>Canciones de Pop</h1>
        <ul>
            <span> Marcadas como públicas</span>
           <?php
        echo Podcast::listarCanciones($nombre, "publica", "pop");
            ?>
        </ul>
        <ul>
            <span> Marcadas como privadas</span>
              <?php
        echo Podcast::listarCanciones($nombre, "privada", "pop");
     
            ?>
        </ul>
         
        
         <h1>Canciones de Rock</h1>
        <ul>
            <span> Marcadas como públicas</span>
           <?php
        echo Podcast::listarCanciones($nombre, "publica", "rock");
            ?>
        </ul>
        <ul>
            <span> Marcadas como privadas</span>
        
        </ul>
         
         <h1>Canciones de Flamenco</h1>
        <ul>
            <span> Marcadas como públicas</span>
           <?php
        echo Podcast::listarCanciones($nombre, "publica", "flamenco");
            ?>
        </ul>
        <ul>
            <span> Marcadas como privadas</span><br>
              <?php
        echo Podcast::listarCanciones($nombre, "privada", "flamenco");
        $var=  Request::get('src');
            ?>
        </ul>
         
         
              <audio src="<?php echo $var?>" controls autoplay></audio>
        <a href="user.php"><div id="volverAtras">Volver al área de usuario</div></a>
          </div>
        
        
         
    </body>
</html>
