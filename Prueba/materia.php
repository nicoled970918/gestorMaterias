<!DOCTYPE html>
<?php

class Materia
{
    public $codigo = null;
    public $nombre = null;
    public $semestre = 0;
    public $creditos = 0;

    /*------------Constructor por parametros------------*/
    function __construct(string $codigo, string $nombre, int $semestre, int $creditos)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->semestre = $semestre;
        $this->creditos = $creditos;
    }

    public static function createFromArray($arr)
    {
        $materia = new Materia($arr["codigo"],$arr["nombre"],$arr["semestre"],$arr["creditos"]);
        return $materia;
    }

    /*------------Set y get del codigo------------*/
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    /*------------Set y get del nombre------------*/
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /*------------Set y get del semestre------------*/
    public function getSemestre()
    {
        return $this->semestre;
    }

    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;
        return $this;
    }

    /*------------Set y get de creditos------------*/
    public function getCreditos()
    {
        return $this->creditos;
    }

    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;
        return $this;
    }
}
?>
<?php
    echo "<script>";
    echo "var text= '" .$_POST["cod"]."';";
    echo "</script>";
    
?>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <title>Materias</title>
   <link rel="stylesheet" type="text/css" href="style.css">
  <script src="2materiaAJAX.js"></script>
  <script>peticion(text);</script>
</head>

<body >
    <!--<header>
        <div id="pensum"><h1>PÉNSUM ACEDÉMICO</h1>
        <div id="codEstudiante"></div><h2></h2></div>
    </header>
    <section>
        <div id="visualizador">
            <div name="semestre" class="semestre"><h1>Semestre</h1>
                <div class="numSemestre">
                    <h1 id="numeSemestre"></h1>
                </div>
                    <div name="materia" class="materia">
                        <h3></h3>
                    </div>
            </div>
        </div>
    </section> -->

    <div class="visualizador">
        <h1>PÉNSUM ACADÉMICO</h1>
        <h2>Código: </h2><h2 id="cod"></h2>
        <div class="semestres" id="sems">
        <div class="materias" id="mats">
            
        </div>
        </div>
    </div>
</body>
</html>