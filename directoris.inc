<?php



function crea_directoris($command){
    $dir = str_replace("mkdir ","",$command);    
    $dir= "dirs_and_files/".$dir;
    if(!file_exists($dir)){
        mkdir($dir);        
    }else{
        escriure("This file already exists");
    }
}
function esborra_directoris($command){
    $dir = str_replace("rm ","",$command);
    $dir= "dirs_and_files/".$dir;
    if(!file_exists($dir)){
        escriure("Cannot find ".$dir);
    }else{
        rmdir($dir);
    }
}
function escriure($text){

    $file = fopen("dirs_and_files/text_consola.txt","a")OR die("Cannot Open this file");
    $text = "root@gerard-PC~# ". $text;
    fwrite($file,$text . PHP_EOL);
    fclose($file);   
}

?>