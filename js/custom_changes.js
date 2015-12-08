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

	
	$("#events_form").validate({
		rules: {
		    eventtitle: "required",
			description: "required",
			startdateandtime:"required",
			enddateandtime:"required",
			location:"required",
			status:"required",
			image:"required",
			eventhead:"required",
			eventcontact:"required",
			noofparticipant:"required",
			eventwebsite: {
                    required: true,
                    eventwebsite: true
                },
			
		},
		messages:{
			eventtitle: "Please enter your name",
			description:"please enter your description",
			startdateandtime:"please enter your start date and time",
			enddateandtime:"please enter your end date and time",
			location:"please enter your location",
			status:"please enter your status",
			eventhead:"please enter your event head",
			eventcontact:"please enter your event contact",
			noofparticipant:"please enter your no of participant",
			eventwebsite: "Please enter a valid email address.",
			image:"please choose your image",
		}
                
	
	
});

	$('#check').click(function(event) { 
			if($(this).is(":checked")) {
				$('.checkbox').each(function(){
					$(this).prop("checked",true);
				});
			}
		    else{
				$('.checkbox').each(function(){
					$(this).prop("checked",false);
				});
			}	
        });   
});