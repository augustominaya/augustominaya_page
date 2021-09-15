function show(id) {
      document.getElementById(id).style.display = 'block';
    }

    function hide(id) {
      document.getElementById(id).style.display = 'none';
    }
	
	  function confirmar()
{
	if(confirm('¿Estas Seguro Que Desea Eliminar Este Registro?'))
		return true;
	else
		return false;
}


function imprimir() {
if (window.print)
window.print()
else
alert("Para imprimir presione Crtl+P.");
}


$(document).ready(function() {
     $(".botonExcel").click(function(event) {
     $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
     $("#FormularioExportacion").submit();
});
});

var hora = getHours();
document.write(hora);
