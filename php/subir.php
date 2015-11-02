<?php
//texto y archivo
require '../clases/Request.php';
require '../clases/FileUpload.php';
require '../clases/AutoCarga.php';
$sesion = new Session();
$user = $sesion->getUser();
$nombre=$user->getNombre();



$usuario = Request::post("usuario");
$categoria = Request::post("categoria");
$privacidad=Request::post("privacidad");
$subir= new FileUpload("archivo");
$categoriaRuta='../usuarios/'.$user->getNombre().'/'.$privacidad.'/'.$categoria;

if(!file_exists($categoriaRuta)){
        mkdir($categoriaRuta, 0777, true);}
        
$subir->setDestino("../usuarios/$nombre/$privacidad/$categoria/");
$subir->setTamaño(100000000000000000000000000000000);
$subir->setPolitica(FileUpload::RENOMBRAR);
if($subir->upload()){
    echo 'Archivo subido con éxito';
    header("Location:user.php");
} else{
    echo 'Archivo no subido';
    header("Location:error.php");}
