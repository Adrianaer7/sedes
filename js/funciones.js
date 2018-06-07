

function validar() {
		if ($('#nombre').val().trim().length== 0)
		  {	
			alert('EL CAMPO "NOMBRE" ES OBLIGATORIO ');
		}
		

		else
		  {	
			$('#form1').submit();
		}    

	}

	