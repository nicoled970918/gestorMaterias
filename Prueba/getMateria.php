<?php

include 'materia.php';
// Read JSON file
$json = file_get_contents('materias.json');
//Decode JSON
//$materias = json_decode($json,true);
if(isset($_GET["codEstudiante"]))
{
    $codigo=$_GET["codEstudiante"];
    $archivo = $codigo.".json";
    if(!file_exists($archivo))
    {   
        //creo un archivo json con el codigo del estudiante 
        $buf = fopen($archivo,'w');
        // escribo en el archivo  la materias que me trae  materia.json
        fwrite($buf,$json);
        fclose($buf);
        //$datosMostrar = file_get_contents($archivo);
    }
    $temp = file_get_contents($archivo);
    echo $temp;
}

?>
