$(document).ready(function() {


 $(function(){
        window.prettyPrint && prettyPrint();
        $('#dp1').datetimepicker({
            format: 'mm-dd-yyyy'
        });
        $('#dp2').datetimepicker();
        $('#dp3').datepicker();
        $('#dp3').datepicker();
        $('#dpYears').datepicker();
        $('#dpMonths').datepicker();
		$('#tp1').timepicker();

        var startDate = new Date(2012,1,20);
        var endDate = new Date(2012,1,25);
        $('#dp4').datepicker()
            .on('changeDate', function(ev){
                if (ev.date.valueOf() > endDate.valueOf()){
                    $('#alert').show().find('strong').text('The start date can not be greater then the end date');
                } else {
                    $('#alert').hide();
                    startDate = new Date(ev.date);
                    $('#startDate').text($('#dp4').data('date'));
                }
                $('#dp4').datepicker('hide');
            });
        $('#dp5').datepicker()
            .on('changeDate', function(ev){
                if (ev.date.valueOf() < startDate.valueOf()){
                    $('#alert').show().find('strong').text('The end date can not be less then the start date');
                } else {
                    $('#alert').hide();
                    endDate = new Date(ev.date);
                    $('#endDate').text($('#dp5').data('date'));
                }
                $('#dp5').datepicker('hide');
            });

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkout.setValue(newDate);
                }
                checkin.hide();
                $('#dpd2')[0].focus();
            }).data('datepicker');
        var checkout = $('#dpd2').datetimepicker({
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
                checkout.hide();
            }).data('datetimepicker');
    });

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
			dp1:"required",
			dp2:"required",
			location:"required",
			status:"required",
			image:"required",
			eventhead:"required",
			eventcontact:"required",
			noofparticipant:"required",
			eventwebsite: {
                    required: true,
                    url: true
                },
			eventcontact:{
			required:true,
			minlength:10,
			maxlength:10,
			number:true
			},
		},
		messages:{
			eventtitle: "Please enter your name",
			description:"please enter your description",
			dp1:"please enter your start date and time",
			dp2:"please enter your end date and time",
			location:"please enter your location",
			status:"please select your status",
			eventhead:"please enter your event head",
			eventcontact:"please enter your event contact",
			noofparticipant:"please enter your no of participant",
			eventwebsite: "Please enter a valid website.",
			image:"please choose your image",
		}
        
    });
    $("#eventgallery_form").validate({

		rules: {
			event_title: {
                    required: true
                    
                },
			image: {
                    required: true
                }
               
		},
		messages:{
			event_title: "Please select a title name.",
			image: {
                    required: "Please upload a valid image."
                }
		}
                
	});
	    $("#blog_category_form").validate({

		rules: {
			category_name: {
                    required: true
                    
                },
			status: {
                    required: true
                }
               
		},
		messages:{
			category_name: "Please enter a valid name.",
			status: {
                    required: "Please select a status."
                }
		}
                
	});

	$("#page-form").validate();
	
$("#eventgallery_form").validate({
		rules: {
			event_title: {
                    required: true
                    
                },
			image: {
                    required: true
                    
                }
                
		},
		messages:{
			event_title: "Please select a title name.",
			image: {
                    required: "Please upload a valid image."
                    
                }
            
		}
                
	});

    $("#blog_form").validate({
		rules: {
		    title: "required",
			category:"required",
			description: "required",
			status:"required",
			},
	
		messages:{
			title: "Please enter your title name",
			category:"please select your category",
			description:"please enter your description",
			status:"please select your status",
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
	

	$(document).on('click', ".addfield", function(){
		$(this).parent().after($("#backup").html());
	});
	$(document).on('click', ".removefield", function(){
		$(this).parent().remove();
	});


});