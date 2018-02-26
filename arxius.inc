<?php
/**
 * Created by PhpStorm.
 * User: Alumne
 * Date: 26/02/2018
 * Time: 18:07
 */
function crea_fitxer($command){

    $control = fopen("$command","w+");
    if($control == false){
        escriure("can't create any files, check your permissions");
    }
}
function esborra_fitxer($command){

    $dir = str_replace("rm","",$command);
    $dir= "dirs_and_files/".$dir;
    if(!unlink($command)){
        escriure("can't delete this file");
    }

}



?>