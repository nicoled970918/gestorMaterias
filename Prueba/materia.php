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
    
  <h1>Pénsum Académico</h1>
  
  <div class="visualizador">
    <h2 id="codigo">Código:</h2>
    <div  class="semestre1">
            <p> Semestre I </p>
            <div class="materia">
                <h3> Calculo I </h3>
                <h4>*5</h4>
                <h5></h5>
            </div>
        </div>
        <div class="semestre2">
                <p> Semestre </p>
                <div class="materia">
                    <h3> Calculo I </h3>
                    <h4>*5</h4>
                    <h5></h5>
                </div>
        </div>

        <div class="semestre3">
            <p> Semestre I </p>
            <div class="materia">
                <h3> Calculo I </h3>
                <h4>*5</h4>
                <h5></h5>
            </div>
        </div>

        <div class="semestre4">
            <p id="pS"> Semestre IV </p>
            <div class="materia">
                <p> Ecuaciones Diferenciales Ordinarias </p>
            </div>
        </div>

        <div class="semestre5">
            <p id="pS"> Semestre V </p>
            <div class="materia">
                <p> Análisis numérico </p>
            </div>
        </div>

        <div class="semestre6">
            <p id="pS"> Semestre VI </p>
            <div class="materia">
                <p> Ingeniería de Software II </p>
            </div>
        </div>
        <div class="semestre7">
            <p id="pS"> Semestre VII </p>
            <div class="materia">
                <p> Inteligencia Artificial </p>
            </div>
        </div>
        <div class="semestre8">
            <p id="pS"> Semestre VIII </p>
            <div class="materia">
                <p> Análisis numérico </p>
            </div>
        </div>
        <div class="semestre9">
            <p id="pS"> Semestre IX </p>
            <div class="materia">
                <p> Análisis numérico </p>
            </div>
        </div>
        <div class="semestre10">
            <p id="pS"> Semestre X </p>
            <div class="materia">
                <p> Cualquier cosa </p>
            </div>
        </div> 

  </div>

</body>
</html>