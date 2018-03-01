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
    $dir = str_replace("rm -d ","",$command);
    $dir= "dirs_and_files/".$dir;
    if(!file_exists($dir)){
        escriure("Cannot find ".$dir);
    }else{
        if(!rmdir($dir)){
            escriure("can't remove this directory");
        }
    }
}
function escriure($text){

    $file = fopen("dirs_and_files/text_consola.txt","a")OR die("Cannot Open this file");
    $text = "root@gerard-PC~# ". $text;
    fwrite($file,$text . PHP_EOL);
    fclose($file);

}
function move_directory($arxiu,$nou_arxiu){

    $arxiu="dirs_and_files/".$arxiu;
    $nou_arxiu="dirs_and_files/".$nou_arxiu;
    if(!rename($arxiu,$nou_arxiu)){
        escriure("Can't find this directory");
    }
}
function ls(){

    $directories = scandir("dirs_and_files");
    foreach ($directories as $item){

        if($item == "." | $item == ".."){

        }else{
            $file = fopen("dirs_and_files/text_consola.txt","a")OR die("Cannot Open this file");
            fwrite($file,$item . PHP_EOL);
            
            fclose($file);
        }

    }

}


?>