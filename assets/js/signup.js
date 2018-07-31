$(document).ready(function(){
	var name = "";
	var email = "";
	var password = "";
	var confirm = "";
	var name_req = /^[a-z ]+$/i;
	var email_req = /^[a-z]+[0-9a-zA-Z_\.]*@[a-z_]+\.[a-z]+$/

	// --> Name Validations
	$("#name").focusout(function(){
		var store = $.trim($("#name").val());
		if(store.length == ""){
			$(".name-error").html("Name is required!");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name = "";
		}else if(name_req.test(store)){
			$(".name-error").html("");
			$("#name").addClass("border-green");
			$("#name").removeClass("border-red");
			name = store;
		}else{
			$(".name-error").html("Integer is not allowed");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name = "";
		}
	});
	// --> Close Name Validations

	// --> Email Validations
	$("#email").focusout(function(){
		var email_store = $.trim($("#email").val());
		if(email_store.length == ""){
			$(".email-error").html("Email is required!");
			$("#email").addClass("border-red");
			$("#email").removeClass("border-green");
			email = "";
		}else if(email_req.test(email_store)){
			$.ajax({
				type: 'POST',
				url: 'ajax/signup.php',
				data: {'check_email': email_store},
				success: function(feedback){
					alert(feedback);
				}
			});
			/*$(".email-error").html("");
			$("#email").addClass("border-green");
			$("#email").removeClass("border-red");
			email = email_store;*/
		}else{
			$(".email-error").html("Invalid email formated!");
			$("#email").addClass("border-red");
			$("#email").removeClass("border-green");
			email = "";
		}
	});
});