var Login = function() {
	"use strict";
	var runBoxToShow = function() {
		var el = $('.box-register');
		
		el.show().addClass("animated flipInX").on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
			$(this).removeClass("animated flipInX");
		});
	};
	var runLoginButtons = function() {		
		$('.register').on('click', function() {
			$('.box-login').removeClass("animated flipInX").addClass("animated bounceOutRight").on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
				$(this).hide().removeClass("animated bounceOutRight");

			});
			$('.box-register').show().addClass("animated bounceInLeft").on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
				$(this).show().removeClass("animated bounceInLeft");

			});

		});
		$('.go-back').click(function() {
			var boxToShow;
			if ($('.box-register').is(":visible")) {
				boxToShow = $('.box-register');
			} else {
				boxToShow = $('.box-forgot');
			}
			boxToShow.addClass("animated bounceOutLeft").on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
				boxToShow.hide().removeClass("animated bounceOutLeft");

			});
			$('.box-login').show().addClass("animated bounceInRight").on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
				$(this).show().removeClass("animated bounceInRight");

			});
		});
	};
	//function to return the querystring parameter with a given name.
	var getParameterByName = function(name) {
		name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"), results = regex.exec(location.search);
		return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	};
	var runSetDefaultValidation = function() {
		$.validator.setDefaults({
			errorElement : "span", // contain the error msg in a small tag
			errorClass : 'help-block',
			errorPlacement : function(error, element) {// render error placement for each input type
				if (element.attr("type") == "radio" || element.attr("type") == "checkbox") {// for chosen elements, need to insert the error after the chosen container
					error.insertAfter($(element).closest('.form-group').children('div').children().last());
				} else if (element.attr("name") == "card_expiry_mm" || element.attr("name") == "card_expiry_yyyy") {
					error.appendTo($(element).closest('.form-group').children('div'));
				} else {
					error.insertAfter(element);
					// for other inputs, just perform default behavior
				}
			},
			ignore : ':hidden',
			success : function(label, element) {
				label.addClass('help-block valid');
				// mark the current input as valid and display OK icon
				$(element).closest('.form-group').removeClass('has-error');
			},
			highlight : function(element) {
				$(element).closest('.help-block').removeClass('valid');
				// display OK icon
				$(element).closest('.form-group').addClass('has-error');
				// add the Bootstrap error class to the control group
			},
			unhighlight : function(element) {// revert the change done by hightlight
				$(element).closest('.form-group').removeClass('has-error');
				// set error class to the control group
			}
		});
	};
	
	var runRegisterValidator = function() {
		var form3 = $('.form-register');
		var errorHandler3 = $('.errorHandler', form3);
		form3.validate({
			rules : {
				cname : {
					required : true
				},
				phone : {
					
					required : true
				},
				street : {
					required : true
				},
				number : {
					minlength : 1,
					required : true,
					number: true
				},
				borough : {
					required : true
				},
				zip : {
					minlength : 4,
					required : true,
					maxlength : 4
				},
				state : {
					required : true
				},
				city : {
					required : true
				},
				sub_plan : {
					
					required : true
				},
				cnpj : {
					required : true
				},
				email : {
					required : true
				},
				password : {
					required : true
				},
				password_again : {
					required : true,
					equalTo : "#password"
				},
				agree : {
					required : true
				}
			},
			submitHandler : function(form) {
				errorHandler3.hide();
				form3.submit();
			},
			invalidHandler : function(event, validator) {//display error alert on form submit
				errorHandler3.show();
			}
		});
	};
	return {
		//main function to initiate template pages
		init : function() {
			runBoxToShow();
			runLoginButtons();
			runSetDefaultValidation();
			runRegisterValidator();
		}
	};
}();
