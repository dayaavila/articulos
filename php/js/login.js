$(document).ready(function(){

	$("#login_form").on("submit", function(e){

		e.preventDefault();
		var flag = true;
		msg = "";
		var name = $("#name");
        var pwd = $("#pwd");
        
		if(name.val() == "")
		{
			msg += "El campo nombre está vacío <br>";
			$(name).css("border-bottom", "2px solid red");
			flag = false;
		}
		else
		{
			$(name).css("border-bottom", "2px solid gray");
		}

		if(pwd.val() == "")
		{
			msg += "El campo password está vacío <br>";
			$(pwd).css("border-bottom", "2px solid red");
			flag = false;
		}
		else
		{
			$(pwd).css("border-bottom", "2px solid gray");
		}

		$("#errorsL").html(msg);
		if(flag)
		{
			document.getElementById("contact_form").submit();
		}
	});
});
