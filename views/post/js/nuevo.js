$(document).ready(function(){
	$('#form1').validate({
		rules:{
			titulo:{
				required: true
			},
			contenido:{
				required: true
			} 
		},
		messages:{
			titulo:{
				required: "Debe introducir el titulo"
			},
			contenido:{
				required: "Debe introducir un contenido"
			}
		}
	});
});
