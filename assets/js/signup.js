$(document).ready(function(){
	var name = "";
	var email = "";
	var password = "";
	var confirm = "";
	var name_req = /^[a-z ]+$/i;
	var email_req = /^[a-z]+[0-9a-zA-Z_\.]*@[a-z_]+\.[a-z]+$/;
	var password_req = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,}$/;

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
				dataType: 'JSON',
				beforeSend: function(){
					$(".email-error").html('<i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>');
				},
				data: {'check_email': email_store},
				success: function(feedback){
					setTimeout(function(){
						if(feedback['error'] == 'email_success'){
							$(".email-error").html("<div class='text-success'><i class='fa fa-check-circle'></i> Available</div>");
							$("#email").addClass("border-green");
							$("#email").removeClass("border-red");
							email = email_store;
						}else if(feedback['error'] == 'email_fail'){
							$(".email-error").html("Sorry this email is already exist!");
							$("#email").addClass("border-red");
							$("#email").removeClass("border-green");
							email = "";
						}
					}, 3000);
				}
			});
		}else{
			$(".email-error").html("Invalid email formated!");
			$("#email").addClass("border-red");
			$("#email").removeClass("border-green");
			email = "";
		}
	});
	// --> Close Email Validations

	// --> Password Validations
	$("#password").focusout(function(){
		 var password_store = $.trim($("#password").val());
		 if(password_store.length == ""){
		 	$(".password-error").html("Password is required!");
			$("#password").addClass("border-red");
			$("#password").removeClass("border-green");
			password = "";
		 }else if(password_req.test(password_store)){
		 	$(".password-error").html("Success!");
			$("#password").addClass("border-green");
			$("#password").removeClass("border-red");
			password = password_store;
		 }else{
		 	$(".password-error").html("Password error!");
			$("#password").addClass("border-red");
			$("#password").removeClass("border-green");
			password = "";
		 }
	});
	// --> Close Password Validations
});