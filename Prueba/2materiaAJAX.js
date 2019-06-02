function peticion(codigo)
{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
      if (this.readyState == 4 && this.status == 200) 
      {
          this.responseText;
      }
    };
    xhttp.open("GET", "getMateria.php?codEstudiante="+codigo, false);
    xhttp.send();
}
//Función para hacer que la ejecución tarde unpoco para simular que hay retraso en el servidor
function ingresarCod()
{
  document.formu.submit();
}

function cargarMaterias(materiaJSON, codigo)
{
    var materia = JSON.parse(materiaJSON);
    var sememestre = [];
    var etiSemestre = $('[name="semestre"]').clone();
    var etiMateria = $('[name="materia"]').clone();

    $('#codEstudiante').find('h2').text(codigo);
    materia.foreach(function(valor, indice, array)
    {
      if(!semestre.includes(valor.semestre))
      {
        semestre.push(valor.semestre);
        etiSemestre.attr("id", "semestre"+valor.semestre);
        etiSemestre.find('h1','#numeSemestre').text(valor.semestre);
        etiSemestre.css("display","inline");
        etiSemestre.clone().appendTo('#visualizador');
      }
    });

    sememestre.sort();
    materia.foreach(function(valor,indice,array)
    {
      etiMateria.find('h2').text(valor.nombre);
      etiMateria.find('h3').text('*'+valor.creditos);
      etiMateria.css("display", "block");
      etiMateria.clone().appendTo('#semestre'+valor.semestre);
    });
    console.log(semestre);
}



