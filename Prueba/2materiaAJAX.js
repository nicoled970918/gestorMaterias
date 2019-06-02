function ingresarCod()
{
  document.formu.submit();
}
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

function cargarMaterias(materiaJSON, codigo)
{
    var materia = JSON.parse(materiaJSON);
    var semestres = [];
    var etiSemestre = $('[id="sems"]').clone();
    var etiMateria = $('[id="mats"]').clone();
    var cod = cod.attr("id", "c"+valor.codigo);

    cod.find('#c').text(codigo);
    
    semestres.foreach(function(valor, indice, array)
    {
      if(!semestres.includes(valor.semestre))
      {
        semestres.push(valor.semestre);
        etiSemestre.attr("id", "sems"+valor.semestre);
        etiSemestre.find('h1','#s').text(valor.semestre);
        etiSemestre.css("display","inline");
        etiSemestre.clone().appendTo('#vi');
      }
    });
    semestres.sort();

    materia.foreach(function(valor,indice,array)
    {
      etiMateria.find('#p').text(valor.nombre);
      etiMateria.find('#creds').text(valor.creditos+'⭐');
      etiMateria.css("display", "block");
      etiMateria.clone().appendTo('#sems'+valor.semestre);
    });
    console.log(cargarMaterias);
    alert(cargarMaterias)
}