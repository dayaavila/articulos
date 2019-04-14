$(document).ready(function(){

	$("#insertar_jg").on("submit", function(e){ 

		e.preventDefault();
		var flag = true;
		msg = "";
		var name = $("#name_art");
		var text = $("#textArea");
		// var imagen = $("#imge");

		if(name.val() == "")
		{
			msg += "El campo Nombre del Artículo está vacío <br>";
			$(name).css("border-bottom", "2px solid red");
			flag = false;
		}
		else
		{
			$(name).css("border-bottom", "2px solid gray");
		}

		
		if(text.val() == "")
		{
			msg += "El Textarea está vacío <br>";
			$(text).css("border-bottom", "2px solid red");
			flag = false;
		}
		else
		{
			$(text).css("border-bottom", "2px solid gray");
		}

		// if(imagen.val() == "")
		// {
		// 	msg += "El campo password está vacío <br>";
		// 	$(imagen).css("border-bottom", "2px solid red");
		// 	flag = false;
		// }
		// else
		// {
		// 	$(imagen).css("border-bottom", "2px solid gray");
		// }

		$("#errorsJs").html(msg);
		
		if(flag)
		{
			document.getElementById("insertar_jg").submit();
		}
	});
});