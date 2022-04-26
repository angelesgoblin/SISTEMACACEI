

include_once("conexion.php");
$(document).ready(function(){  
	//require("getDocentes.php");
	// code to get all records from table via select box
	$("#docsistemas").change(function() {    
		include_once("getDocentes.php");
		var id = $(this).find(":selected").val();
		var dataString = 'empid='+ id;    
		$.ajax({
			url: 'getDocentes.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(docdatos) {
			   if(docdatos) {
					$("#heading").show();		  
					$("#no_records").hide();					
					$("#tipo_estatus").text(docdatos.Estatus);
					$("#nombre_docente").text(docdatos.Docente);
					$("#nombre_departamento").text(docdatos.Departamento);
                    $("#tipo_periodo").text(docdatos.Periodo);

                    $("#records").show();		 
				} else {
					$("#heading").hide();
					$("#records").hide();
					$("#no_records").show();
				}   	
			} 
		});
 	}) 
});