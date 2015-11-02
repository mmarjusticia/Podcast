<?php


class Podcast {
    static function BorrarCanciones($usuario,$privacidad,$categoria){
        $string="";
        $directorio="../usuarios/$usuario/$privacidad/$categoria";
            if(file_exists($directorio)){
                $carpeta=  opendir($directorio);
                while($archivo=  readdir($carpeta)){
                    if(!is_dir($archivo)){
                      unlink($archivo);   
                }               
            }        
    }}
    
    static function listarPorPrivacidad($usuario,$privacidad){
        $lista= self::listarCanciones($usuario, $privacidad, "pop").self::listarCanciones($usuario, $privacidad, "rock").self::listarCanciones($usuario, $privacidad, "flamenco").self::listarCanciones($usuario, $privacidad, "jazz");
        return $lista;
    }
    
    static function listarCanciones($usuario,$privacidad,$categoria){
        $string="";
        $directorio="../usuarios/$usuario/$privacidad/$categoria";
            if(file_exists($directorio)){
                $carpeta=  opendir($directorio);
                while($archivo=  readdir($carpeta)){
                    if(!is_dir($archivo)){
                        $string=$string.'<a href="?src=../usuarios/'.$usuario.'/'.$privacidad.'/'.$categoria.'/'.$archivo.'"><li>'.$archivo.'</li></a>';
                    }
                    
                }
                return $string;
            }
        
    }
    
    
    static function ListarUsuarios(){
        $string="";
        $carpeta="../usuarios";
        $array=scandir($carpeta);
        for($i=0;$i<count($array);$i++){
            if($array[$i]!='.'&&$array[$i]!='..'){
             $string.='<a href="?nombre='.$array[$i].'"><li>'.$array[$i].'</li></a>';}      
        }
        return $string;
    }
       static function ListarNombreUsuarios(){
        $string="";
        $carpeta="../usuarios";
        $array=scandir($carpeta);
        for($i=0;$i<count($array);$i++){
            if($array[$i]!='.'&&$array[$i]!='..'){
             $string.='<li>'.$array[$i].'</li>';}
       
        }
        return $string;
    }
        static function listarNombreCanciones($usuario,$privacidad,$categoria){
        $string="";
        $directorio="../usuarios/$usuario/$privacidad/$categoria";
            if(file_exists($directorio)){
                $carpeta=  opendir($directorio);
                while($archivo=  readdir($carpeta)){
                    if(!is_dir($archivo)){
                        $string=$string.'<li>'.$archivo.'</li></a>';
                    }
                    
                }
                return $string;
            }
            }
   
}
