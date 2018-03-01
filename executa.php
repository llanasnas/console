<?php
/**
 * Created by PhpStorm.
 * User: Alumne
 * Date: 19/02/2018
 * Time: 18:16
 */
include_once("console.php");
include_once("directoris.inc");
include_once("arxius.inc");

function executa($comanda)
{
    if ($comanda) {
        escriure($comanda);
        $arr = explode(' ', trim($comanda));
        if ($arr[0] == "mkdir") {
            crea_directoris($comanda);
        } else if ($arr[0] == "rm") {
            if ($arr[1] == "-d") {
                esborra_directoris($comanda);
            } else {
                esborra_fitxer($comanda);
            }
        } else if ($arr[0] == "clear") {
            buidar_fitxer();
        } else if ($arr[0] == "mv") {
            if ($arr[1] == "-d") {
                if (empty($arr[2])) {
                    escriure("Check the syntax ( mv -d 'directory' 'new location' )");
                }
                if (empty($arr[3])) {
                    escriure("Check the syntax ( mv -d 'directory' 'new location' )");
                } else {
                    move_directory($arr[2], $arr[3]);
                }
            }
        }else if($arr[0] == "ls"){
            if(empty($ar[1])){
                ls();
            }else{
                escriure("Unknown command");
            }
        }
        else {
            escriure("unknown command");
        }
    }
}

function llegirFitxer()
{

    $file = fopen("dirs_and_files/text_consola.txt", "r") OR die("Cannot Open this file");
    $filesize = filesize("dirs_and_files/text_consola.txt");
    if ($filesize > 0) {
        $text = str_replace(PHP_EOL, "</br>", fread($file, filesize("dirs_and_files/text_consola.txt")));
        echo "<p style='color: chartreuse'>" . $text . "</p>";
    } else {
        echo " ";
    }


    fclose($file);
}

function buidar_fitxer()
{

    esborra_fitxer("dirs_and_files/text_consola.txt");
    crea_fitxer("dirs_and_files/text_consola.txt");

}


?>