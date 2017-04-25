$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than 1MB');



var getParameterByName = function(name) {
		name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"), results = regex.exec(location.search);
		return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	};
	
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
var register_patient = $('#form_patient_reg');
var errorHandler3 = $('.errorHandler', register_patient);
register_patient.validate({
	rules : {
		patient_profile_image: {
			accept: "image/*",
			filesize:1000000
		}, 
		profession: {
			pattern: /^[a-zA-Z\s]*$/
		},
		fname: {
			required:true,
			pattern:/^[a-zA-Z\s]*$/
		},
		sname: {
			pattern:/^[a-zA-Z\s]*$/
		},
		dob:{
			//required: true,
			//dateNL:true
		},
		cpfv:{
			pattern:/^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}|[0-9]{2}\.?[0-9]{3}\.?[0-9]{3}\/?[0-9]{4}\-?[0-9]{2})$/,
			//required:true
		},
		rg:{
			pattern:/^([0-9]{2}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}|[0-9]{2}\.?[0-9]{3}\.?[0-9]{3}\/?[0-9]{4}\-?[0-9]{2})$/
			//required:true
		},
		nationality:{
			pattern: /^[a-zA-Z\s]*$/,
			//required:true
		},
		phone_landline:{
			//phoneNL:true,
			//required:true
		},
		phone_celular1:{
			//mobileNL:true,
			//required:true
		},
		phone_celular2:{
			//mobileNL:true,
			//required:true
		},
		phone_celular3:{
			//mobileNL:true,
			//required:true
		},
		phone_celular4:{
			//mobileNL:true,
			//required:true
		},
		patient_whatsapp:{
			//mobileNL:true,
			//pattern:/^[^0-9]*\+9{3}\s9\s9{3}\s9{4}$/
			//required:true
		},
		patient_skype:{
			pattern: /^[a-z][\w\.]{0,24}$/i,/* ^[a-zA-Z\s]*$/ */
			maxlength:25
		},
		patient_email:{
			required:true,
			//email:true,
			pattern:/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
		},
		patient_road:{
			//required:true,
			pattern: /^[a-zA-Z\s]*$/
		}/* ,
		patient_borough:{
			//required:true,
			pattern: /^[a-zA-Z\s]*$/
			//required:true
		} */,
		patient_city:{
			//required:true,
			pattern: /^[a-zA-Z\s]*$/
			//required:true
		},
		patient_number:{
			digits:true
			//required:true
		},
		patient_state:{
			//required:true
		},
		patient_zip:{
			//required:true,
			digits:true,
			minlength : 4,
			maxlength:4
			//required:true
		},
		patient_obs:{
			//required:true,
			pattern:/^[a-zA-Z\s]*$/
		},
		take_drug:{
			required:true
		},
		have_birth_defect:{
			required:true
		},
		bone_dev_stage:{
			required:true
		},
		take_prg_pills:{
			required:true
		},
		has_prev_surgeries:{
			required:true
		},
		current_health:{
			required:true
		},
		wheel_chair:{
			required:true
		},
		body_type:{
			required:true
		},
		patient_height:{
			number:true,
			//required:true
		},
		patient_weight:{
			number:true,
			//required:true
		},
		cardExpDate1:{
			required: true,
			//dateNL:true
		},
		cardNo1:{
			required: true,
			digits:true
		},
		DP_acd1:{
			//required: true,
			pattern:/^[a-zA-Z\s]*$/
		},
		anterior_ortho_treatment:{
			//required: true,
			pattern:/^[a-zA-Z\s]*$/
		},
		ortho_reason_for_treatment:{
			pattern:/^[a-zA-Z\s]*$/,
			//required:true
		},
		orto_motivation_level:{
			//required: true,
			pattern:/^[a-zA-Z\s]*$/
		},
		otho_observation:{
			pattern:/^[a-zA-Z\s]*$/,
			//required:true
		},
		ortho_planing_note:{
			//required: true,
			pattern:/^[a-zA-Z\s]*$/
		},
		patient_orto_init_img: {
			accept: "image/*",
			filesize:1000000
		}, 
		pro_reason_for_treatment:{
			//required:true,
			pattern:/^[a-zA-Z\s]*$/
		},
		pros_limit:{
			//required:true,
			pattern:/^[a-zA-Z\s]*$/
		},
		pros_observation:{
			//required:true,
			pattern:/^[a-zA-Z\s]*$/
		},
		patient_pros_init_img: {
			accept: "image/*",
			filesize:1000000
		}, 
		
		
	},
	messages: {
		cpfv: { 
			required: "Only Digits are allowed",
			verificaCPF: "Invalid Format(###.###.###-##)"
		},  
		patient_email: { 
			required: "Invalid email address!",
			verificaCPF: "Invalid email address!"
		}               
	}, 
	invalidHandler : function(event, validator) {//display error alert on form submit
		errorHandler3.show();
	}
});