
   // loading procedures
   function appointmentTreatment(el){
      $('a[href="#treatment"],a[href="#appointment-information"]').unbind('click').click(function(){
         // loading treatment
         $.blockUI({
             message: '<i class="fa fa-spinner fa-spin"></i> Loading Treatment for this user ...'
         });

         function print_appointment_treatment($data){
            var string = '';
            if($data.length > 0){
               $('#loadTreatmentUnderAppointment').find('.alert').remove();
               $('#loadTreatmentUnderAppointment').find('.table').show();
               for($i=0;$i< $data.length;$i++){
                  string += '<tr><td>'+Date.parse($data[$i].start_date).toString('MMM d, yyyy')+'</td><td>'+$data[$i].treatment_title+'</td><td class="hidden-xs">'+$data[$i].dentist_name+'</td><td class="center hidden-xs">'+$data[$i].status+'</td><td class="hidden-xs">'+$data[$i].payment_type+'</td> <td>R$ '+$data[$i].amount+'</td><td class="center hidden-xs"><a ><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="'+$data[$i].observation+'"></i></a></td><td class="hidden-xs"><span><a  class="editAppointmentTreatment" href="javascript:void(0)" data-id="'+$data[$i].id+'"><i class="fa fa-pencil"></i></a></span>&nbsp;&nbsp;&nbsp;<span><a class="deleteAppointmentTreatment" href="javascript:void(0)" data-id="'+$data[$i].id+'"><i class="fa fa-trash"></i></a></span> </td></tr>';
               }
               $('#loadTreatmentUnderAppointment table tbody').html(string);
            }else {

            }
         }

         $.ajax({
             url: APP_URL+'/procedures/getPatientTreatment',
             data:{'appointment_id':el.id,'patient_id':el.patient_id,dentist_id:el.dentist_id,"_method":"POST","_token":csrf_token},
             method:"POST",
             success: function (data) {
               $.unblockUI();
               var string = '';
               if(data.status == 'success'){
                  print_appointment_treatment(data.message);
                  $('[data-toggle="tooltip"]').tooltip();
               }
            }
         });


         // adding treatment from appointment

         $('#addTreatment').unbind('submit').submit(function(){

            var formData = $('#addTreatment').serializeObject();

            if(formData.price == ''){
               alert('Please Select a Treatment!');
               return false;
            }

            formData.patient_id = el.patient_id;
            formData.dentist_id = el.dentist_id;
            formData._method    = "POST";
            formData._token     = csrf_token;
            formData.appointment_id     = el.id;
            $.ajax({
                  type:"POST",
                  url:APP_URL+'/procedures',
                  data:formData,
                  success:function(data){
                     $('#register_procedure').modal('hide');
                     $("#addTreatment")[0].reset();
                     $("#addTreatment").find('#register_treatment_type_id').val('').selectpicker('refresh');
                     var string = '';
                     if(data.status == 'success'){
                        toastr.success('Treatment Added Successfully!');
                        print_appointment_treatment(data.message);
                        $('[data-toggle="tooltip"]').tooltip();
                     }
                  }
            });
            return false;
         });

         // editing treatment
         $('#treatment').on('click','.editAppointmentTreatment',function(){
            $id = $(this).attr('data-id');
            $.blockUI({
                message: '<i class="fa fa-spinner fa-spin"></i> Edit This Treatment ...'
            });
            $.ajax({
                  type:"GET",
                  url:APP_URL+'/procedures/'+$id,
                  success:function(data){
                     $.unblockUI();
                     $data = data.message;
                     $('#editTreatmentModal').modal('show');
                     $('#editTreatment').find('input[name=id]').val($id);
                     $('#editTreatment').find('.treatment_type').val($data.treatment_type_id);
                     $('#editTreatment').find('input[name=price]').val($data.payment.amount);
                     $('#editTreatment').find('.price-placeholder').val($data.payment.amount);
                     $('#editTreatment').find('input[name=payment_action]').val($data.payment.status);
                     $('#editTreatment').find('input[name=payment_type]').val($data.payment.payment_type);
                     $('#editTreatment').find('textarea').val($data.observation);
                     $('#editTreatment .selectpicker').each(function(){
                        $(this).selectpicker('refresh');
                     })
                     return false;
                  }
            });
            return false;
         });

         // update Treatment

         $('#editTreatment').unbind('submit').submit(function(){

            var formData = $('#editTreatment').serializeObject();

            if(formData.price == ''){
               alert('Please Select a Treatment!');
               return false;
            }
            $id = formData.id;
            delete formData.id;
            formData._method    = "PUT";
            formData._token     = csrf_token;
            $.ajax({
                  type:"PUT",
                  url:APP_URL+'/procedures/'+$id,
                  data:formData,
                  success:function(data){
                     if(data.status == 'success'){
                        $('#editTreatmentModal').modal('hide');
                        //toastr.success(data.message);
                        print_appointment_treatment(data.message);
                     }else {
                        toastr.error(data.message);
                     }
                  }
            });
            return false;
         });


         // changing treatment price
         $('#register_treatment_type_id').on('change',function(){
            $id = $(this).val();
            if($id == ''){
               $('#addTreatment').find('#price').val('');
               $('#addTreatment').find('input[name=price]').val('');
            }else {
               $('#addTreatment').find('#price').val(tArray[$id]);
               $('#addTreatment').find('input[name=price]').val(tArray[$id]);
            }
         });

         // deleting treatment
         $('body').off().on('click','.deleteAppointmentTreatment',function(){
            $t = $(this);
            $id = $(this).attr('data-id');
            if(confirm('Are you Sure ?')){
               $.ajax({
                     type:"POST",
                     url:APP_URL+'/procedures/'+$id,
                     data:{"_method":"DELETE","_token":csrf_token},
                     success:function(data){
                        if (data.status === 'success') {
                           toastr.success(data.message);
                           $t.closest('tr').remove();
                        }
                        if (data.status === 'error') {
                           toastr.error(data.message);
                        }
                     }
               });
            }
         })

      });
      return false;
   }

   // photo documentation

   function photoDocumentation(el){

      function uploadFile(){
         var input = document.getElementById("file");
         file = input.files[0];
         if(file != undefined){
           formData= new FormData();
            if(!!file.type.match(/image.*/)){
               formData.append("image", file);
               $.ajax({
                  url: "upload.php",
                  type: "POST",
                  data: formData,
                  processData: false,
                  contentType: false,
                  success: function(data){
                     alert('success');
                  }
               });
            }else{
            toastr.error('Not a Valid File!');
          }
        }else{
         toastr.error('Please select a file!');
        }
      }

      function documentImages($data){
         var string = '';
         for($i=0;$i< $data.length;$i++){
            string += '<div class="item"><i data-id="'+$data[$i].id+'" class="fa fa-trash"></i><img src="'+$data[$i].url+'"><div class="image_meta">'+$data[$i].created_at+'</div></div>';
         }
         $('#photo_documentation').find('.photo_document').html(string);
         $('#photo_documentation').find('.no_document').hide();
         $('#photo_documentation').find('.photo_document').show();
      }

      $('.nav-profile li a.photo-documentation').unbind('click').click(function(){
         $.blockUI({
             message: '<i class="fa fa-spinner fa-spin"></i> Loading Treatment Documents for this user ...'
         });

         $.ajax({
             url: APP_URL+'/calendar/getPatientTreatmentDocuments',
             data:{'appointment_id':el.id,"_method":"POST","_token":csrf_token},
             method:"POST",
             success: function (data) {
               $.unblockUI();
               $data = data;
               var string = '';
               if($data == ''){
                  $('.photo_document').hide();
               }else {
                  documentImages($data);
               }

            }
         });
         $("#addAppointmentDocument").find("input[name=appointment_id]").val(el.id);
         $('#addAppointmentDocument').unbind('submit').submit(function(){
            console.log('Submitted');
            $data =  $('#addAppointmentDocument').serializeObject();
            $.ajax({
               url: APP_URL+'/calendar/addDocument',
               type: "POST",             // Type of request to be send, called as method
               data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
               contentType: false,       // The content type used when sending data to the server.
               cache: false,             // To unable request pages to be cached
               processData:false,
               success: function(data){
                  if(data.status == 'success'){
                     //toastr.success(data.message);
                     $('#input-id').fileinput('reset');
                     documentImages(data.message);
                  }
                  if(data.status == 'error'){
                     toastr.error(data.message);
                     $('#input-id').fileinput('reset');
                  }
               }
            });
            return false;
         })

         // deleting documents

         $('body').on("click",'.photo_document .item i',function(){
            $(this).off('click');
            $id = $(this).attr('data-id');
            $t = $(this);
            if(confirm("Are you Sure ?")){
               $.ajax({
                  url: APP_URL+'/calendar/deleteDocument/'+$id,
                  data:{"_method":"POST","_token":csrf_token},
                  method:"POST",
                  success: function (data) {
                     if(data.status == "success"){
                        $t.closest('.item').remove();
                        toastr.success(data.message);
                     }
                     if(data.status == "error"){
                        toastr.error(data.message);
                     }
                  }
               });
            }
            return false;
         })

      });
   }

   // appointment quotation
   function quotationContent(el){
      $('.nav-profile li a.quotations').unbind('click').click(function(){
         // loading treatment
         $.blockUI({
            message: '<i class="fa fa-spinner fa-spin"></i> Loading Quotation for this user ...'
         });

         // get quotation
         $.ajax({
            url: APP_URL+'/calendar/getQuotation',
            data:{'id':el.id,'_method':"POST","_token":csrf_token},
            method:"POST",
            success: function (data) {
               $.unblockUI();
               if(data.status == "success"){
                  $('#quotation').find('.panel-body').html(data.message);
               }
               if(data.status == "error"){
                  toastr.error(data.message);
               }
            }
         });

         // update or add quotation
         $('body').on('submit','#addAppointmentQuotation',function(){
            $d =  $('#addAppointmentQuotation').serializeObject();
            $d.content = $(this).find('textarea[name="content"]').html();
            $d.appointment_id = el.id;
            $.ajax({
               url: APP_URL+'/calendar/addQuotation',
               data:$d,
               method:"POST",
               success: function (data) {
                  $.unblockUI();
                  if(data.status == "success"){
                     $data = JSON.parse(data);
                     //$('#addAppointmentQuotation').find('textarea').val(data.message);

                  }
                  if(data.status == "error"){
                     toastr.error(data.message);
                  }
               }
            });
            return false;
         });

      });
      return false;
   }

   // pictogram function

   function pictogram(el){
      // unsetting
      $('.nav-tabs').each(function(){
         $(this).children('li').removeClass('active');
         $(this).children('li:first-child').addClass('active');
      })
      $('.tab-content').each(function(){
         $(this).children('div').removeClass('active');
         $(this).children('div:first-child').addClass('active in');
      })

      $('.nav-profile li a.pictogram_tab').unbind('click').click(function(){
         $.blockUI({
             message: '<i class="fa fa-spinner fa-spin"></i> Loading Pictogram for this user ...'
         });
         $('.myGramPanel .myHover').each(function(){
            $(this).find('.tooth_issue').remove();
         });
         $('#defectDescirptionMobile').html('');
         $.ajax({
            url: APP_URL+'/pictogram/getPictogram',
            data:{'appointment_id':el.id,'_method':"POST","_token":csrf_token},
            method:"POST",
            success: function (data) {
               $.unblockUI();
               if(data.status == "success"){
                  $content = data.message;
                  var string = '';
                  console.log($content[0].id);
                  $('.myGramPanel .myHover').each(function(){
                     $id = $(this).attr('id');
                     for($i=0;$i<$content.length;$i++){
                        if($content[$i].tooth_number+$content[$i].tooth_type == $id){
                           var varx = $content[$i].tooth_left;
                           var vary = $content[$i].tooth_top;
                           $('#'+$id).append('<span class="tooth_issue" style="left:'+varx+';top:'+vary+';"><i class="fa fa-circle"></i></span>');

                           string += '<div class="tooth_detail" data-id='+$content[$i].id+'><span class="indicationLable">'+$id+'</span><i class="fa fa-trash delete pull-right"></i> <i class="fa edit fa-pencil pull-right"></i><p>'+$content[$i].description+'</p></div>'
                        }
                     }
                  })
                  $('#defectDescirptionMobile').html(string);
               }
               if(data.status == "error"){
                  toastr.error(data.message);
               }
            }
         });

         $('#toothForm').unbind('submit').submit(function(){
            var data = $('#toothForm').serializeObject();
            var data1 = $('#toothForm').serializeObject();
            data.patient_id     = el.patient_id;
            data.appointment_id = el.id;
            if(data.id != ''){
               delete data.tooth_left;
               delete data.tooth_top;
            }
            $.ajax({
               url: APP_URL+'/pictogram',
               data:data,
               method:"POST",
               success: function (data) {
                  if(data.status == "success"){
                     $data_id = data1.tooth_number.concat(data1.tooth_type);
                     $('.tooth_issue.temporary').removeClass('temporary');

                     if(data1.id == ""){
                        $("#defectDescirptionMobile").append("<div class='tooth_detail' data-id="+data.message+"><span class='indicationLable'>"+$data_id+"</span><i class='fa fa-trash delete pull-right'></i> <i class='fa edit fa-pencil pull-right'></i><p>"+data1.description+"</p></div");
                     }else {
                        $("#defectDescirptionMobile").find("[data-id='" + data1.id + "']").children('p').text(data1.description);
                        toastr.success(data.message);
                     }
                  }
                  if(data.status == "error"){
                     toastr.error(data.message);
                  }
                  $("#toothModal").modal('hide');
               }
            });
            return false;
         });

         // edit

         $('body').on("click",'.tooth_detail i.edit',function(){
            $id = $(this).parent().attr('data-id');
            $tooth_id = $(this).parent().find('span').text();
            $('#toothForm').find('input[name=tooth_number]').val($tooth_id.replace(/\D+/g, ''));
            $('#toothForm').find('input[name=tooth_type]').val($tooth_id.replace(/[^a-zA-Z]+/g, ''));
            $('#toothForm').find('.tooth_number').text($tooth_id.replace(/\D+/g, ''));
            $('#toothForm').find('textarea').val($(this).parent().find("p").text());
            $('#toothForm').find('input[name=id]').val($id);

            $("#toothModal").modal('show');

         })

         // deleting

         $('body').on("click",'.tooth_detail i.delete',function(){
            $(this).unbind('click');
            $id = $(this).parent().attr('data-id');
            $ids = $(this).parent().find('span').text();
            $t = $(this);
            if(confirm("Are you Sure ?")){
               $.ajax({
                  url: APP_URL+'/pictogram/'+$id,
                  data:{"_method":"DELETE","_token":csrf_token},
                  method:"POST",
                  success: function (data) {
                     if(data.status == "success"){
                        $t.parent().remove();
                        $("#"+$ids).children('.tooth_issue').remove();
                        toastr.success(data.message);
                     }
                     if(data.status == "error"){
                        toastr.error(data.message);
                     }
                  }
               });
            }
         })
      });
   }

   // issue exam

   // appointment quotation
   function issueExam(el){
      $('.nav-profile li a.issue_exam').unbind('click').on('click',function(){
         $.blockUI({
            message: '<i class="fa fa-spinner fa-spin"></i> Loading Exams for this user ...'
         });
         $('#loadExam .panel-body table').remove();
         $("#updateExam").hide();
         $('#addExam').show();

         $('body').on('submit',"#addExam",function(){
            alert(el.id);
         })
         //get exams
         $.ajax({
            url: APP_URL+'/exams/get',
            data:{"appointment_id":el.id,"method":"POST","_token":csrf_token},
            method:"POST",
            success: function (data) {
               $.unblockUI();
               $(".loadExams .panel-body").html('');
               if(data.status == "success"){

                  $string = '';
                  $content = data.message;
                  console.log(data.message[0].id);
                  for($i=0;$i<$content.length;$i++){
                     $string += "<div class='exam_block' data-id='"+$content[$i].id+"'><div><i class='fa fa-calendar'></i> "+$content[$i].exam_date+"</div>";
                     $string += "<div><i class='fa fa-file'></i> "+$content[$i].model.title+"</div>";
                     $string += "<div><i class='fa fa-user'></i> "+$content[$i].dentist_name.first_name+" "+$content[$i].dentist_name.last_name+" <span class='exam_actions'><i data-id='"+$content[$i].id+"' class='fa fa-pencil edit-exam'></i> <i data-id='"+$content[$i].id+"' class='fa fa-trash'></i></span></div></div>";
                  }
                  $(".loadExams .panel-body").html($string);
               }
               if(data.status == "error"){
                  toastr.error(data.message);
               }
            }
         });

         // adding exam
         $('#addExam').unbind('submit').submit(function(){
            $d =  $('#addExam').serializeObject();
            if($d.exam_date == ''){
               alert('Please Fill Exam Date!');
               return false;
            }
            $d.exam_description = $('#summernote').summernote('code');
            $d.appointment_id   = el.id;
            $d.patient_id       = el.patient_id;
            $d.dentist_id       = el.dentist_id;
            $.ajax({
               url: APP_URL+'/exams',
               data:$d,
               method:"POST",
               success: function (data) {
                  $.unblockUI();
                  if(data.status == "success"){
                     $('#summernote').summernote('code','');
                     $('#addExam').find('.date-picker').val('');
                     $string = '';
                     $content = data.message;
                     for($i=0;$i<$content.length;$i++){
                        $string += "<div class='exam_block' data-id='"+$content[$i].id+"'><div><i class='fa fa-calendar'></i> "+$content[$i].exam_date+"</div>";
                        $string += "<div><i class='fa fa-file'></i> "+$content[$i].model.title+"</div>";
                        $string += "<div><i class='fa fa-user'></i> "+$content[$i].dentist_name.first_name+" "+$content[$i].dentist_name.last_name+" <span class='exam_actions'><i data-id='"+$content[$i].id+"' class='fa fa-pencil edit-exam'></i> <i data-id='"+$content[$i].id+"' class='fa fa-trash'></i></span></div></div>";
                     }
                     $(".loadExams .panel-body").html($string);
                  }
                  if(data.status == "error"){
                     toastr.error(data.message);
                  }
                  return false;
               }
            });
            return false;
         });

         // new exam

         $('body').on('click','#newExam',function(){
            $("#updateExam").hide();
            $('#addExam').show();
         })

         // update exam
         $('#updateExam').unbind('submit').submit(function(){
            if($d.exam_date == ''){
               alert('Please Fill Exam Date!');
               return false;
            }
            $.blockUI({
               message: '<i class="fa fa-spinner fa-spin"></i> Updating this Exam ...'
            });
            $d =  $('#updateExam').serializeObject();
            $d.exam_description = $('#summernote1').summernote('code');
            $d.appointment_id   = el.id;
            $id = $d.id
            $.ajax({
               url: APP_URL+'/exams/'+$id,
               data:$d,
               method:"PUT",
               success: function (data) {
                  $.unblockUI();
                  if(data.status == "success"){
                     $('#summernote1').summernote('code','');
                     $('#updateExam').hide();
                     $('#addExam').show();
                     $string = '';
                     $content = data.message;
                     console.log(data.message[0].id);
                     for($i=0;$i<$content.length;$i++){
                        $string += "<div class='exam_block' data-id='"+$content[$i].id+"'><div><i class='fa fa-calendar'></i> "+$content[$i].exam_date+"</div>";
                        $string += "<div><i class='fa fa-file'></i> "+$content[$i].model.title+"</div>";
                        $string += "<div><i class='fa fa-user'></i> "+$content[$i].dentist_name.first_name+" "+$content[$i].dentist_name.last_name+" <span class='exam_actions'><i data-id='"+$content[$i].id+"' class='fa fa-pencil edit-exam'></i> <i data-id='"+$content[$i].id+"' class='fa fa-trash'></i></span></div></div>";
                     }
                     $(".loadExams .panel-body").html($string);
                  }
                  if(data.status == "error"){
                     toastr.error(data.message);
                  }
               }
            });
            return false;
         });

            // deleting  exams
         $('body').unbind('click').on('click',".exam_actions > .fa-trash",function(){
            $id = $(this).attr('data-id');
            $t  = $(this);
            if(confirm('Are you sure ?')){
               $.ajax({
                  url: APP_URL+'/exams/'+$id,
                  data:{"_method":"DELETE","_token":csrf_token},
                  method:"POST",
                  success: function (data) {
                     $.unblockUI();
                     $('#addExam').show();
                     $('#updateExam').hide();
                     if(data.status == "success"){
                        $t.closest('.exam_block').remove();
                        toastr.success(data.message);
                        $('#summernote').summernote('code','');
                     }
                     if(data.status == "error"){
                        toastr.error(data.message);
                     }
                  }
               });
            }
         });

         // edit form
         $('body').on('click','.edit-exam',function(){
            $id = $(this).attr('data-id');
            // loading exam
            $.blockUI({
               message: '<i class="fa fa-spinner fa-spin"></i> Loading This Exam ...'
            })
            $.ajax({
               url: APP_URL+'/exams/'+$id,
               method:"GET",
               success: function (data) {
                  $.unblockUI();
                  if(data.status == "success"){
                     $('#addExam').hide();
                     $('#updateExam').show();
                     console.log(data.message);
                     $content = data.message;
                     $('#summernote1').summernote('code',$content.exam_description);
                     $('#updateExam').find('.date-picker').val($content.exam_date);
                     $('#updateExam').find('#model_id').val($content.model_id);
                     $('#updateExam').find('input[name=id]').val($content.id);
                      $('#updateExam').find('.selectpicker').selectpicker('refresh');
                     //$('#addExam').summernote('code',$content.exam_description);
                  }
                  if(data.status == "error"){
                     toastr.error(data.message);
                  }
               }
            });
         });


      });
      return false;
   }

   // appointment summary
   function appointmentSummary(el){

      $('.new-event-tabs > li > a.appointment-summary').unbind('click').click(function(){

         var setId = '';
         // loading treatment
         $.blockUI({
            message: '<i class="fa fa-spinner fa-spin"></i> Loading Exams for this user ...'
         });

         //get exams
         $.ajax({
            url: APP_URL+'/calendar/summary',
            data:{"appointment_id":el.id,"_method":"POST","_token":csrf_token},
            method:"POST",
            success: function (data) {
               $.unblockUI();
               if(data.status == "success"){
                  $content = data.message;

                  // generating payments
                  $paymentsString = '';
                  $amount = 0;
                  for($i=0;$i< ($content.treatments).length;$i++){
                     $paymentsString += '<tr><td>'+$content.treatments[$i].start_date+'</td><td>'+$content.treatments[$i].treatment_title+'</td><td class="center hidden-xs">'+$content.treatments[$i].status+'</td><td class="hidden-xs">'+$content.treatments[$i].payment_type+'</td> <td>R$ '+$content.treatments[$i].amount+'</td></tr>';
                     $amount = $amount+$content.treatments[$i].amount;
                  }
                  $paymentsString += '<td>Total:</td><td colspan="3"></td><td>R$ '+$amount+'</td>';

                  $('#appointment-summary').find('.payment_table').html($paymentsString);

                  // generating photos
                  var string = '';
                  $photos = $content.documents;
                  for($i=0;$i< ($content.documents).length;$i++){
                     string += '<div class="item"><img src="'+$content.documents[$i].url+'"><div class="image_meta">'+$content.documents[$i].created_at+'</div></div>';
                  }
                  $('#appointment-summary').find('.photo_documentation').html(string);

               }
               if(data.status == "error"){
                  toastr.error(data.message);
               }
            }
         });

      });


      return false;
   }
