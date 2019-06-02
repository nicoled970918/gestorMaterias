<!DOCTYPE html>
<?php

class Materia
{
    public $codigo = null;
    public $nombre = null;
    public $semestre = 0;
    public $creditos = 0;
    public $estado = false;

    function __construct(string $codigo, string $nombre, int $semestre, int $creditos, boolean $estado)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->semestre = $semestre;
        $this->creditos = $creditos;
        $this->estado = $estado;
    }

    public static function createFromArray($arr)
    {
        $materia = new Materia($arr["codigo"],$arr["nombre"],$arr["semestre"],$arr["creditos"], $arr["estado"]);
        return $materia;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getSemestre()
    {
        return $this->semestre;
    }

    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;
        return $this;
    }

    public function getCreditos()
    {
        return $this->creditos;
    }

    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
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
  <title>controlMaterias</title>
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

    <div id="vi" class="visualizador">
        <h1>PÉNSUM ACADÉMICO</h1>
        <h2 id="c">Código: </h2><h2 id="cod"></h2>
        <p id="info"> 
            <h1>Información:</h1>
            A continuación, encontrará el control de materias del programa Ingeniería de Sistemas
            organizado por semestres. 
            El control funciona de la siguiente manera:
            <p>1. Sí el nombre de la asignatura aparece en color blanco, quiere decir que el estudiante
               aún no ha visto esa asignatura.</p>
            <p>2. Sí el nombre de la asignatura aparece tachado y en color gris, quiere decir que el estudiante
               ya vio esa asignatura.</p>

            <p>Lista de materias.</p>
        </p>
        <div id="sems" class="semestres" >
            <h1 id="s">SEMESTRE</h1>
            <div id="mats" class="materias">
                <p id="p">
                </p>
                <h3 id="creds">⭐</h3>
            </div>
        </div>
    </div>
</body>
</html>