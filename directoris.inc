<?php

function crea_directoris($command){
    $dir = str_replace("mkdir ","",$command);
    $dir= "dirs_and_files/".$dir;
    if(!file_exists($dir)){
        mkdir($dir);
    }else{
        excriure("This file already exists");
    }
}
function escriure($text){

    $file = fopen("dirs_and_files/text_consola.txt","a")OR die("Cannot Open this file");   
    fwrite($file,$text . PHP_EOL);
    fclose($file);   
}

?>