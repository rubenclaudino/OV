$(document).ready(function(){

   $.fn.serializeObject = function()
   {
       var o = {};
       var a = this.serializeArray();
       $.each(a, function() {
           if (o[this.name] !== undefined) {
               if (!o[this.name].push) {
                   o[this.name] = [o[this.name]];
               }
               o[this.name].push(this.value || '');
           } else {
               o[this.name] = this.value || '';
           }
       });
       return o;
   };

   // register dentist
 /*  $("#registerDentist").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         clinic_id:{required:true},
         first_name: {
            minlength: 2,
            required: true
         },
         last_name: {
            minlength: 2,
            required: true
         },
          email: {
              required: true,
              email: true
          },
          password: {
              minlength: 6,
              required: true
          },
          password_confirmation: {
              required: true,
              minlength: 5,
              equalTo: "#password"
          },
          gender: {
            required: true
          },
         cpf:{required: true},
         rg:{required: true},
         observation:{required: true},
         cro:{required: true},
         honors:{required: true},
         address:{required: true},
         city:{required: true},
         state:{required: true},
         country:{required: true},
         zip:{required: true},
      },
      messages: {
          firstname: "Please specify your first name",
          lastname: "Please specify your last name",
          email: {
              required: "We need your email address to contact you",
              email: "Your email address must be in the format of name@domain.com"
          },
      },
      submitHandler: function(form) {
         var btn = $('#registerDentist').find('btn-submit').button('loading');
         var formData = $('#registerDentist').serializeObject();
         $.ajax({
               type:"POST",
               url:APP_URL+'/dentists',
               data:formData,
               success:function(data){
                  if(data.status == 'success'){
                     $("#registerDentist")[0].reset();
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });

   // delete Dentist

   $('.deleteDentist').click(function(){
      $t  = $(this);
      $id = $(this).attr('data-id');
      swal({
         title: "Delete This Item",
         text: "Submit to Delete This Item",
         type: "info",
         showCancelButton: true,
         closeOnConfirm: false,
         showLoaderOnConfirm: true,
      },
      function(){
         setTimeout(function(){
            $.ajax({
                  type:"POST",
                  url:APP_URL+'/dentists/'+$id,
                  data:{_method: 'DELETE',"id":$id, "_token": csrf_token },
                  success:function(data){
                     if(data == 'success'){
                        var row = $t.closest('tr');
                        $('.dataTable').dataTable().fnDeleteRow(row);
                        btn.button('reset');
                        toastr.success('The Dentist has been deleted added!');
                     }else {
                        toastr.error(data);
                     }
                  }
            });
         });
      });
   });




   // update dentist

   $("#updateDentist").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         clinic_id:{required:true},
         first_name: {
            minlength: 2,
            required: true
         },
         last_name: {
            minlength: 2,
            required: true
         },
          email: {
              required: true,
              email: true
          },
          password: {
            minlength: 6,
          },
          password_confirmation: {
            minlength: 5,
            equalTo: "#password"
          },
          gender: {
            required: true
          },
         cpf:{required: true},
         rg:{required: true},
         observation:{required: true},
         cro:{required: true},
         honors:{required: true},
         address:{required: true},
         city:{required: true},
         state:{required: true},
         country:{required: true},
         zip:{required: true},
      },
      messages: {
          firstname: "Please specify your first name",
          lastname: "Please specify your last name",
          email: {
              required: "We need your email address to contact you",
              email: "Your email address must be in the format of name@domain.com"
          },
      },
      submitHandler: function(form) {
         var btn = $('#updateDentist').find('btn-submit').button('loading');
         var formData = $('#updateDentist').serializeObject();
         console.log(formData.id);
         $.ajax({
               type:"POST",
               url:APP_URL+'/dentists/'+formData.id,
               data:formData,
               success:function(data){
                  if(data.status == 'success'){
                     //$("#registerDentist")[0].reset();
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });
*/

    // adding bug
/*
    $("#addBug").validate({
        errorPlacement: function (error, element) { // render error placement for each input type
            if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                //$(element).closest('.form-group').addClass('has-error');
                $(element).closest('.form-group').append(error);
                //error.insertAfter($(element).closest('.form-group').children('div').children().last());
            } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                //error.insertAfter($(element).closest('.form-group').children('div'));
                error.insertAfter($(element).closest('.form-group').addClass('has-error'));
            } else {
                //$(element).closest('.form-group').addClass('has-error');
                $(element).closest('.form-group').append(error);
            }
        },
        rules: {
            report:{required:true}
        },
        submitHandler: function(form) {
            var formData = $('#addBug').serializeObject();
            $.ajax({
                type:"POST",
                url:APP_URL+'/bugs/store',
                data:formData,
                success:function(data){
                    $('#myModalbug').modal('hide');
                    if(data == 'success'){
                        $("#addBug")[0].reset();
                        toastr.success('The Appointment Type Added!');
                        location.reload();
                    }else {
                        toastr.error(data);
                    }
                }
            });
            return false;
        }
    });
*/
   // adding Appointment Type

   $("#addAppointmentType").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         title:{required:true}
      },
      submitHandler: function(form) {
         var formData = $('#addAppointmentType').serializeObject();
         $.ajax({
               type:"POST",
               url:APP_URL+'/calendar/addAppointmentType',
               data:formData,
               success:function(data){
                  $('#addAppointmentTypeModal').modal('hide');
                  if(data == 'success'){
                     $("#addAppointmentType")[0].reset();
                     toastr.success('The Appointment Type Added!');
                     location.reload();
                  }else {
                     toastr.error(data);
                  }
               }
         });
         return false;
      }
   });

   // add Treatment Typoes

   $("#addTreatmentType").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         title:{required:true},
         price:{required:true,number:true},
         speciality:{required:true},
      },
      submitHandler: function(form) {
         var formData = $('#addTreatmentType').serializeObject();
         $.ajax({
               type:"POST",
               url:APP_URL+'/treatmenttypes/store',
               data:formData,
               success:function(data){
                  $('#addTreatmentTypeModal').modal('hide');
                  if(data.status == 'success'){
                     $("#addTreatmentType")[0].reset();
                     toastr.success(data.message);
                     location.reload();
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });


   // adding Permissions

   $("#registerPermission").validate({
      ignore: ":hidden:not(.selectpicker)",
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         name:{required:true},
         slug:{required:true},
         model:{required:true},
         description:{required:true},
      },
      submitHandler: function(form) {
         var formData = $('#registerPermission').serializeObject();
         $.ajax({
               type:"POST",
               url:APP_URL+'/permissions',
               data:formData,
               success:function(data){
                  if(data == 'success'){
                     $("#registerPermission")[0].reset();
                     $("#registerPermission .selectpicker").selectpicker('refresh');
                     toastr.success('Permission Added!');
                  }else {
                     toastr.error(data);
                  }
               }
         });
         return false;
      }
   });

   $("#updatePermission").validate({
      ignore: ":hidden:not(.selectpicker)",
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         name:{required:true},
         slug:{required:true},
         model:{required:true},
         description:{required:true},
      },
      submitHandler: function(form) {
         var formData = $('#updatePermission').serializeObject();
         $action = $('#updatePermission').attr('action');
         $.ajax({
               type:"POST",
               url:$action,
               data:formData,
               success:function(data){
                  if(data.status == 'success'){
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
                  return false;
               }
         });
         return false;
      }
   });


   // adding Appointment Type

   $("#addAppointmentType").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         title:{required:true}
      },
      submitHandler: function(form) {
         var formData = $('#addAppointmentType').serializeObject();
         $.ajax({
               type:"POST",
               url:APP_URL+'/calendar/addAppointmentType',
               data:formData,
               success:function(data){
                  $('#addAppointmentTypeModal').modal('hide');
                  if(data == 'success'){
                     $("#addAppointmentType")[0].reset();
                     toastr.success('The Appointment Type Added!');
                     location.reload();
                  }else {
                     toastr.error(data);
                  }
               }
         });
         return false;
      }
   });

   // add Patient
/*
   $("#addPatient").validate({
      ignore: [],
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         }
         else if((element.attr("type")) == "file") {
            $(element).parent().parent().append(error);
         }
         else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
            if(($(element).closest('.form-group').length) < 0){
               $(element).parent().append(error);
            }
         }
      },
      rules: {
         //patient_profile_image:{required:true},
         first_name:{required:true},
         last_name:{required:true},
         /*email:{required:true, email: true},
         DOB:{required:true},
         gender:{required:true},
         CPF:{required:true},
         RG:{required:true},
         maritial_status:{required:true},
         nationality:{required:true},
         indication:{required:true},
         phone_landline:{required:true},
         celular_1:{required:true},
         celular_2:{required:true},
         whatsapp_number:{required:true},
         street_address:{required:true},
         city_id:{required:true},
         borough_id:{required:true},
         state_id:{required:true},
         zip:{required:true},*/
 /*     },
      messages: {
         patient_profile_image:{required:"Profile Image is required!"},
         first_name:{required:"First Name is required!"},
         last_name:{required:"Last Name is required!"},
         email:{required:"Email is required!", email: "Valid Email required!"},
         DOB:{required:"DOB is required!"},
         gender:{required:"Gender is required!"},
         CPF:{required:"CPF is required!"},
         RG:{required:"RG is required!"},
         maritial_status:{required:"Maritial Status is required!"},
         nationality:{required:"Nationality is required!"},
         indication:{required:"Indication is required!"},
         phone_landline:{required:"Phone  is required!"},
         celular_1:{required:"First Cellphone is required!"},
         celular_2:{required:"Second Cellphone is required!"},
         whatsapp_number:{required:"Whatsapp Number is required!"},
         street_address:{required:"Street Address is required!"},
         borough_id:{required:"Borough is Required"},
         city_id:{required:"City is Required"},
         state_id:{required:"State is Required"},
         zip:{required:"Zip Code is required"},
      },
      submitHandler: function(form) {
         var formData = $('#addPatient').serializeObject();
         var f = $('#addPatient')[0];
         var d = new FormData(f);

         // getting all checkboxes
         var diseases = new Object();
         $('#health input[type=checkbox]').each(function(){
                  // attach matched element names to the formData with a chosen value.
                  var emptyVal = "";
                  $name  = $(this).attr('data-id');
                  $value = $(this).val();
                  diseases[$name] = $value;
              }
          );
          d.append('diseases', JSON.stringify(diseases));

         $.ajax({
               type:"POST",
               url:APP_URL+'/patients',
               data:d,
               contentType: false,       // The content type used when sending data to the server.
               cache: false,             // To unable request pages to be cached
               processData:false,
               success:function(data){
                  if(data.status == 'success'){
                     $("#addPatient")[0].reset();
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });
*/
   // add Item

   $("#addItem").validate({
      ignore: [],
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         }
         else if((element.attr("type")) == "file") {
            $(element).parent().parent().append(error);
         }
         else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
            if(($(element).closest('.form-group').length) < 0){
               $(element).parent().append(error);
            }
         }
      },
      rules: {
         image_url:{required:true},
         title:{required:true},
         quantity:{required:true},
         min_stock:{required:true},
         purchased_date:{required:true},
      },
      submitHandler: function(form) {
         $.blockUI({
             message: '<i class="fa fa-spinner fa-spin"></i> Saving Item ...'
         });
         var f = $('#addItem')[0];
         var d = new FormData(f);

         $.ajax({
               type:"POST",
               url:APP_URL+'/stockcontrol',
               data:d,
               contentType: false,       // The content type used when sending data to the server.
               cache: false,             // To unable request pages to be cached
               processData:false,
               success:function(data){
                  $.unblockUI();
                  if(data.status == 'success'){
                     $("#addItem")[0].reset();
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });

   // update item

   $("#updateItem").validate({
      ignore: [],
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         }
         else if((element.attr("type")) == "file") {
            $(element).parent().parent().append(error);
         }
         else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
            if(($(element).closest('.form-group').length) < 0){
               $(element).parent().append(error);
            }
         }
      },
      rules: {
         image_url:{required:true},
         title:{required:true},
         min_stock:{required:true},
         purchased_date:{required:true},
      },
      submitHandler: function(form) {
         $.blockUI({
             message: '<i class="fa fa-spinner fa-spin"></i> Updating Item ...'
         });
         var f = $('#updateItem')[0];
         var d = new FormData(f);

         $action = $("#updateItem").attr('action');

         $.ajax({
               type:"POST",
               url:$action,
               data:d,
               contentType: false,       // The content type used when sending data to the server.
               cache: false,             // To unable request pages to be cached
               processData:false,
               success:function(data){
                  $.unblockUI();
                  if(data.status == 'success'){
                     // $("#updateItem")[0].reset();
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });


   // adding Recepnist
/*
   $("#addRecepnist").validate({
      ignore:[],
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         first_name:{required:true},
         last_name:{required:true},
         email:{required:true},
         DOB:{required:true},
         gender:{required:true},
         phone_landline:{required:true,number:true},
         celular_1:{required:true,number:true},
         street_address:{required:true},
         borough_id:{required:true},
         state_id:{required:true},
         city_id:{required:true},
         zip:{required:true},
         password: {
             minlength: 6,
             required: true
         },
         password_confirmation: {
             required: true,
             minlength: 5,
             equalTo: "#password"
         },
      },
      submitHandler: function(form) {
         var formData = $('#addRecepnist').serializeObject();
         $.ajax({
               type:"POST",
               url:APP_URL+'/recepnists',
               data:formData,
               success:function(data){
                  if(data.status == 'success'){
                     $("#addRecepnist")[0].reset();
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });

   // update Recepnist

   $("#updateRecepnist").validate({
      ignore:[],
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         first_name:{required:true},
         last_name:{required:true},
         DOB:{required:true},
         gender:{required:true},
         phone_landline:{required:true,number:true},
         celular_1:{required:true,number:true},
         street_address:{required:true},
         borough_id:{required:true},
         state_id:{required:true},
         city_id:{required:true},
         zip:{required:true},
         password: {
             minlength: 6,
         },
         password_confirmation: {
             minlength: 6,
             equalTo: "#password"
         },
      },
      submitHandler: function(form) {
         var formData = $('#updateRecepnist').serializeObject();
         $action = $('#updateRecepnist').attr('action');
         $.ajax({
               type:"POST",
               url:$action,
               data:formData,
               success:function(data){
                  if(data.status == 'success'){
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });

*/
   // adding dental Plan

   $("#createDentalPlan").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         title:{required:true}
      },
      submitHandler: function(form) {
         var formData = $('#createDentalPlan').serializeObject();
         $.ajax({
               type:"POST",
               url:APP_URL+'/dentalplans',
               data:formData,
               success:function(data){
                  if(data.status == 'success'){
                     $("#createDentalPlan")[0].reset();
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });

   // update dental plan
   $("#updateDentalPlan").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         title:{required:true},
      },
      submitHandler: function(form) {
         var formData = $('#updateDentalPlan').serializeObject();
         $action = $('#updateDentalPlan').attr('action');
         $.ajax({
               type:"POST",
               url:$action,
               data:formData,
               success:function(data){
                  if(data.status == 'success'){
                     $("#updateDentalPlan")[0].reset();
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });


   // adding new contact

   $("#addContact").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         title:{required:true},
      },
      submitHandler: function(form) {
         var formData = $('#addContact').serializeObject();
         $.ajax({
               type:"POST",
               url:APP_URL+'/contacts',
               data:formData,
               success:function(data){
                  $.unblockUI();
                  if(data.status == 'success'){
                     $("#addContact")[0].reset();
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });

   // update Contact

   $("#updateContact").validate({
      ignore: [],
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         }
         else if((element.attr("type")) == "file") {
            $(element).parent().parent().append(error);
         }
         else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
            if(($(element).closest('.form-group').length) < 0){
               $(element).parent().append(error);
            }
         }
      },
      rules: {
         title:{required:true}
      },
      submitHandler: function(form) {
         $.blockUI({
             message: '<i class="fa fa-spinner fa-spin"></i> Updating Contact ...'
         });

         $action = $("#updateContact").attr('action');

         var formData = $('#updateContact').serializeObject();
         $.ajax({
               type:"POST",
               url:$action,
               data:formData,
               success:function(data){
                  $.unblockUI();
                  if(data.status == 'success'){
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });


   $("#updateStock").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         quantity:{number:true,required:true}
      },
      submitHandler: function(form) {
         var formData = $('#updateStock').serializeObject();
         formData._method = "PUT";
         formData._token = csrf_token;

         $.ajax({
               type:"POST",
               url:APP_URL+'/updateStock/'+formData.id,
               data:formData,
               success:function(data){
                  if(data.status == 'success'){
                     $("#stockModal").modal('hide');
                     toastr.success(data.message);
                     window.location.reload();
                  }else {
                     toastr.error(data.message);
                     window.location.reload();
                  }
               }
         });
         return false;
      }
   });


   /*
    * REMINDERS FUNCTIONS
    */

    $('body').on('click','.deleteReminder',function(){
      $t  = $(this);
      $id = $(this).attr('data-id');

      swal({
         title: "Delete This Reminder",
         text: "Submit to Delete This Reminder",
         type: "info",
         showCancelButton: true,
         closeOnConfirm: false,
         showLoaderOnConfirm: true,
      },
      function(){
         setTimeout(function(){
            $.ajax({
                  type:"POST",
                  url:APP_URL+'/reminders/'+$id,
                  data:{_method: 'DELETE',"id":$id, "_token": csrf_token },
                  success:function(data){
                     if(data.status == 'success'){
                        $t.closest('.list-group-item ').remove();
                        swal(data.message,'','success');
                     }else {
                        swal(data.message,'','error');
                     }
                  }
            });
         });
      });
   });

   // markdone

   $('body').on('click','.markDoneReminder',function(){
     $t  = $(this);
     $id = $(this).attr('data-id');
     if(confirm('Are you Sure ?')){
        $.ajax({
              type:"POST",
              url:APP_URL+'/updateStatus/'+$id,
              data:{_method: 'PUT',"id":$id, "_token": csrf_token },
              success:function(data){
                 if(data.status == 'success'){
                    $count = $('.reminderCount').text();
                    $count  = $count - 1;
                     if($count == 0){
                       $('.reminderCount').text('');
                    }else {
                      $('.reminderCount').text($count);
                    }
                    $t.closest('.list-group-item').remove();
                    $reminder = data.data;
                    $html = '<div class="list-group-item "><h4 class="list-group-item-heading text-uppercase">'+$reminder.title+'</h4><p class="list-group-item-text"><i class="fa fa-bell"></i>'+$reminder.content+'</p><hr style="margin:5px 0;"><span class=""><span class="label label-default">'+$reminder.reminder_date+'</span> <span class="label label-info unmarkReminder" data-id="'+$reminder.id+'"><i class="fa fa-check"></i> Unmark</span> <span class="label label-danger deleteReminder" data-id="'+$reminder.id+'"><i class="fa fa-trash "></i> Delete</span></span></div>';
                    $('.completedReminders').prepend($html);

                    toastr.success(data.message);
                 }else {
                    toastr.error(data);
                 }
              }
        });
     }
   });

   // markdoneReminder User
   $('body').on('click','.markDoneReminderUser',function(){
     $t  = $(this);
     $id = $(this).attr('data-id');
     if(confirm('Are you Sure ?')){
        $.ajax({
              type:"POST",
              url:APP_URL+'/updateReminderUserStatus/'+$id,
              data:{_method: 'PUT',"id":$id, "_token": csrf_token },
              success:function(data){
                 if(data.status == 'success'){
                    $count = $('.reminderCount').text();
                    $count  = $count - 1;
                     if($count == 0){
                       $('.reminderCount').text('');
                    }else {
                      $('.reminderCount').text($count);
                    }
                     $t.closest('.list-group-item').remove();
                     $s = $t.closest('.list-group');
                     if($t.closest('.list-group').find('.list-group-item').length > 0){}else {
                        $s.find('.alert').show();
                     }
                     toastr.success(data.message);

                 }else {
                    toastr.error(data);
                 }
              }
        });
     }
   });

   // unmark
   $('body').on('click','.unmarkReminder',function(){
     $t  = $(this);
     $id = $(this).attr('data-id');
     if(confirm('Are you Sure ?')){
        $.ajax({
              type:"POST",
              url:APP_URL+'/unmarkReminder/'+$id,
              data:{_method: 'PUT',"id":$id, "_token": csrf_token },
              success:function(data){
                 if(data.status == 'success'){
                    $t.closest('.list-group-item ').remove();
                    $reminder = data.data;
                    toastr.success(data.message);
                 }else {
                    toastr.error(data);
                 }
              }
        });
     }
  });



   $("#addReminder").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         title:{required:true},
         content:{required:true},
         reminder_date:{required:true}
      },
      submitHandler: function(form) {
         $.blockUI({
             message: '<i class="fa fa-spinner fa-spin"></i> Saving Reminder ...'
         });
         var formData = $('#addReminder').serializeObject();
         $.ajax({
               type:"POST",
               url:APP_URL+'/reminders',
               data:formData,
               success:function(data){
                  $.unblockUI();
                  if(data.status == 'success'){
                     $("#addReminder")[0].reset();
                     $("#addReminderModal").modal('hide');

                     $reminder = data.data;
                     $html  = '';
                     $html = '<div class="list-group-item panel" style="border-radius: 1px"><div style="background: #EDEDED;margin: 0px;padding: 15px 15px 1px 15px"><h4 class="list-group-item-heading text-uppercase" style="color: #404040">'+$reminder.title+'<span style="float: right"><button class="btn btn-xs btn-danger deleteReminder" style="padding-right: 10px;opacity: 0.8" data-id="'+$reminder.id+'"><i class="fa fa-trash fa-fw"></i>&nbsp;Excluir</button></span></h4></div><h5 style="color: #4d4d4d;padding: 15px"><i class="fa fa-calendar fa-fw" style="margin: 5px;color: black;opacity: 0.45"></i> <strong>'+$reminder.reminder_date+'</strong><i class="fa fa-user fa-fw" style="margin: 5px;color: black;opacity: 0.45"></i>';

                     // users

                     for($i=0; $i< ($reminder.reminderUser).length;$i++){
                        $html += '<label class="label label-primary" style="opacity: 0.8">'+$reminder.reminderUser[$i].user.name+'</label> ';
                     }

                     $html += '</h5><p class="list-group-item-text" style="color: #4d4d4d;padding: 0px 15px 15px 15px"><i class="fa fa-bell fa-fw" style="margin: 5px;color: black;opacity: 0.45"></i>'+$reminder.content+'</p></div>';
                     $('.remindersGroup').prepend($html);

                     $('.remindersGroup').find('.alert').hide();


                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });

   // update

   $("#updateReminder").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         title:{required:true},
         content:{content:true},
         reminder_date:{required:true},
      },
      submitHandler: function(form) {
         var formData = $('#updateReminder').serializeObject();
         formData._method = "PUT";
         formData._token = csrf_token;

         $.ajax({
               type:"POST",
               url:APP_URL+'/update/'+formData.id,
               data:formData,
               success:function(data){
                  if(data.status == 'success'){
                     $("#updateReminder").modal('hide');
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });


   // AGENDA SETTINGS

   $("#saveAgendaSettings").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         start:{required:true},
         end:{required:true},
         lunch_start_hours:{required:true},
         lunch_end_hours:{required:true},
         interval:{required:true},
      },
      submitHandler: function(form) {
         var formData = $('#saveAgendaSettings').serializeObject();
         formData._method = "POST";
         formData._token = csrf_token;

         $.ajax({
               type:"POST",
               url:APP_URL+'/agenda',
               data:formData,
               success:function(data){
                  if(data.status == 'success'){
                     toastr.success(data.message);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });

   // AGENDA HOLIDAY SETTINGS

   $("#addHolidayPeriod").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         start_time:{required:true},
         end_time:{required:true},
      },
      submitHandler: function(form) {
         var formData = $('#addHolidayPeriod').serializeObject();
         formData._method = "POST";
         formData._token = csrf_token;
         formData.starttimestamp = moment(formData.start_time).unix();
         formData.endtimestamp   = moment(formData.end_time).unix();
         formData.start_date     = formData.start_time;
         formData.end_date       = formData.end_time;
         $.ajax({
               type:"POST",
               url:APP_URL+'/holidays',
               data:formData,
               success:function(data){
                  if(data.status == 'success'){
                     toastr.success(data.message);
                     $data = data.data;
                     $html = "<div class='well well-sm'><span class='label label-info'>Holiday</span> "+moment($data.start_date).format('MMM DD, YYYY hh:mm A')+" - "+moment($data.end_date).format('MMM DD, YYYY hh:mm A')+"<i class='fa fa-times pull-right deleteHolidayPeriod' data-id='"+$data.id+"'></i></div>";
                     $('#holiday_periods').append($html);
                  }else {
                     toastr.error(data.message);
                  }
               }
         });
         return false;
      }
   });

   // AGENDA HOLIDAY DELETE

   $('body').on("click",'.deleteHolidayPeriod', function(){
      $t  = $(this);
      $id = $(this).attr('data-id');

      swal({
         title: "Delete This Holiday Period",
         text: "Submit to Delete This holiday period",
         type: "info",
         showCancelButton: true,
         closeOnConfirm: false,
         showLoaderOnConfirm: true,
      },
      function(){
         setTimeout(function(){
            $.ajax({
                  type:"POST",
                  url:APP_URL+'/holidays/'+$id,
                  data:{_method: 'DELETE',"id":$id, "_token": csrf_token },
                  success:function(data){
                     if(data.status == 'success'){
                        $t.closest('.well').remove();
                        swal(data.message,'','success');
                     }else {
                        swal(data.message,'','error');
                     }
                  }
            });
         });
      });
   });

   // registering a new user

   // register dentist
   $("#registerClinic").validate({
      errorPlacement: function (error, element) { // render error placement for each input type
         if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
              //error.insertAfter($(element).closest('.form-group').children('div').children().last());
         } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
              //error.insertAfter($(element).closest('.form-group').children('div'));
              error.insertAfter($(element).closest('.form-group').addClass('has-error'));
         } else {
            //$(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').append(error);
         }
      },
      rules: {
         clinic_image:{required:true},
         name: {
            minlength: 2,
            required: true
         },
          email: {
              required: true,
              email: true
          },
          password: {
              minlength: 6,
              required: true
          },
          password_confirmation: {
              required: true,
              minlength: 5,
              equalTo: "#password"
          },
         cpf:{required: true},
         street_address:{required: true},
         number:{required: true},
         borough_id:{required: true},
         city_id:{required: true},
         state_id:{required: true},
         cep:{required: true},
         phone_landline:{required: true,number:true},
         celular_1:{required: true,number:true},
         whatsapp_number:{required: true,number:true},
      },
      submitHandler: function(form) {
         form.submit();
         // var btn = $('#registerClinic').find('btn-submit').button('loading');
         // var f = $('#registerClinic')[0];
         // var d = new FormData(f);
         // $.ajax({
         //       type:"POST",
         //       url:APP_URL+"/register",
         //       data:d,
         //       contentType: false,       // The content type used when sending data to the server.
         //       cache: false,             // To unable request pages to be cached
         //       processData:false,
         //       success:function(data){
         //          if(data.status == 'success'){
         //             $("#registerClinic")[0].reset();
         //             toastr.success(data.message);
         //          }else {
         //             toastr.error(data.message);
         //          }
         //       }
         // });
         // return false;
      }
   });

});
