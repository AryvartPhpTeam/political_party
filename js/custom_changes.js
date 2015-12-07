$(document).ready(function() {

	$("#forgot_form").validate({
		rules: {
			email: {
                    required: true,
                    email: true
                }
			
		},
		messages:{
			email: "Please enter a valid email address."
			
		}
                
	});
	$("#signup_form").validate({
		rules: {
			email: {
                    required: true,
                    email: true
                },
			password: {
                    required: true,
                    minlength: 5
                },
            confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                }
		},
		messages:{
			email: "Please enter a valid email address.",
			password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long."
                },
            confirm_password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long.",
                    equalTo: "Please enter the same password as above."
                }
		}
                
	});
	$("#reset_form").validate({
		rules: {
			
			newpassword: {
                    required: true,
                    minlength: 5
                },
            confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#newpassword"
                }
		},
		messages:{
			
			newpassword: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long."
                },
            confirm_password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long.",
                    equalTo: "Please enter the same password as above."
                }
		}
                
	});
	$("#login_form").validate({
		rules: {
			username: {
                    required: true
                    
                },
			password: {
                    required: true,
                    minlength: 5
                }
                
		},
		messages:{
			username: "Please enter a valid user name.",
			password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long."
                }
            
		}
                
	});
});