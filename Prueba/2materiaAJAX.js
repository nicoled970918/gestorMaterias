
/*--------------------------*/ 
function peticion(codigo)
{
  alert(codigo)
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
      if (this.readyState == 4 && this.status == 200) 
      {
          alert(this.responseText);
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



