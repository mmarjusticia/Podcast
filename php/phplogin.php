<?php
require '../clases/AutoCarga.php';

 $users = array(
     "juan" => "abc",
     "pepe" => "ghi",
     "ana"  => "ana",
     "admin"=> "admin"
 );
 
 $user = Request::post("user");
 $password = Request::post("password");
 $sesion = new Session();

 if(isset($users[$user])&& $users[$user]==$password){
     if($user!="admin"){
        $usuario = new Usuario($user);
        $sesion->setUser($usuario);
        $sesion->sendRedirect("user.php");}
    elseif (($user=="admin")&&($users[$user]==$password)) {
        
        $usuario = new Usuario($user);
        $sesion->setUser($usuario);
        $sesion->sendRedirect("admin.php");
}
 }else{
     $sesion->destroy();
     $sesion->sendRedirect("login.php");
 }
 
