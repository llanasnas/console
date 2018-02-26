<?php
/**
 * Created by PhpStorm.
 * User: Alumne
 * Date: 19/02/2018
 * Time: 18:16
 */
include_once ("console.php");
include_once("directoris.inc");
if($_POST["command"]){
    escriure($_POST["command"]);
    $command = $_POST["command"];
    $arr = explode(' ',trim($command));
    if($arr[0]=="mkdir"){
        crea_directoris($command);
    }if($arr[0]=="rm"){
        esborra_directoris($command);
    }if($arr[0]=="clear"){        
        
    }
}
function llegirFitxer()
{
    $file = fopen("dirs_and_files/text_consola.txt", "r") OR die("Cannot Open this file");
    $text = str_replace(PHP_EOL,"</br>",fread($file, filesize("dirs_and_files/text_consola.txt")));
    echo $text;
    fclose($file);
}
function buidar_fitxer(){
    
}


?>