$(document).ready(function(){
   /* var form_valid = false; */
   var hasOrto=true;
   var hasPros=true;
   var hasDP=true;

   function equalHeight(element){
      var maxHeight = 0;
      $(element).each(function(){
         if ($(element).height() > maxHeight) {
            maxHeight = $(element).height();
         }
      });
      $(element).css({'height':maxHeight+'px'});
   }
   var notesHeight=".equal";
   equalHeight(notesHeight);

   $("#input-id").fileinput({
      uploadUrl: 'patient_register.php',/* $('#form_patient_reg').attr('action') */
      uploadAsync: false,
      showRemove: false,
      showUpload: false,
      allowedFileTypes:['image', 'pdf'],
      previewFileIcon: '<i class="fa fa-file"></i>',
      /*
      allowedPreviewTypes: null, // set to empty, null or false to disable preview for all types
      */
      allowedPreviewTypes: ['image', 'pdf'], // allow only preview of image & text files
      previewFileIconSettings: {
         'docx': '<i class="fa fa-file-word-o text-primary"></i>',
         'xlsx': '<i class="fa fa-file-excel-o text-success"></i>',
         'pptx': '<i class="fa fa-file-powerpoint-o text-danger"></i>',
         'pdf': '<i class="fa fa-file-pdf-o text-danger"></i>',
         'zip': '<i class="fa fa-file-archive-o text-muted"></i>',
      }
   });
   /* End drop able */

   $('#dob').datepicker({
      inline: true,
      dateFormat: 'yy-mm-dd',
      onSelect: function(dateText, inst){
         var date = $(this).val();
         var d = new Date(date);
         alert(d);
         var n = (d.getMonth() + 1);
         $('input[name="dob"]').attr('value', n);

      },
      autoclose: true
   });
   $('#pSpec').html('');

   $('#doc').on('change',function(e){
      //alert($(this).val());
      if($(this).val()!=0){
         $.post("selectSpeciality.php", {doc_id: $(this).val()}, function(result){

            var response = jQuery.parseJSON(result);
            $('#pSpec').html('');
            $.each(response, function(idx, obj) {
               //alert(obj.speciality_title);
               $('#pSpec').append('<option value="'+obj.speciality_id+'" >'+obj.speciality_title+'</option>');
            });
            //console.log('some data here');
            //alert(result);
            //$('#banner_image').attr('src','../assets/images/banners/'+result);
         });
         $.post("selectAcceptedPlans.php", {doc_id: $(this).val()}, function(result){
            var response = jQuery.parseJSON(result);

            $('#accepted_DP1').html('');
            $('#accepted_DP2').html('');
            $('#accepted_DP3').html('');
            $.each(response, function(idx, obj) {
               //alert(obj.speciality_title);
               $('#accepted_DP1').append('<option value="'+obj.plan_type_id+'" >'+obj.plan_name+'</option>');
               $('#accepted_DP2').append('<option value="'+obj.plan_type_id+'" >'+obj.plan_name+'</option>');
               $('#accepted_DP3').append('<option value="'+obj.plan_type_id+'" >'+obj.plan_name+'</option>');
            });
            //console.log('some data here');
            //alert(result);
         });
      }else{
         $('#pSpec').html('');
         $('#accepted_DP1').html('');
         $('#accepted_DP1').append('<option value="0" >--Selecione Dentista</option>');
         $('#accepted_DP2').html('');
         $('#accepted_DP2').append('<option value="0" >--Selecione Dentista</option>');
         $('#accepted_DP3').html('');
         $('#accepted_DP3').append('<option value="0" >--Selecione Dentista</option>');
      }
   });
   $('#hasDentalPlan').on('change',function(e){
      if($(this).val()=='1'){
         /* $('#dentalPlanTitle').css('visibility', 'visible');
         $('#dentalPlan').css('visibility', 'visible'); */
         $('#dentalPlanTitle').show();
         //$('#dentalPlan').show();
         hasDP=true;
      }else{
         /* $('#dentalPlanTitle').css('visibility', 'hidden');
         $('#dentalPlan').css('visibility', 'hidden');
         */
         $('#dentalPlanTitle').hide();
         //$('#dentalPlan').hide();
         hasDP=false;
         $("#form_patient_reg").validate(); //sets up the validator
         $( "#cardExpDate1" ).rules( "remove" );
         $( "#DP_acd1" ).rules( "remove" );
         $( "#cardNo1" ).rules( "remove" );
      }
   });

   $('#pSpec').on('change',function(){
      //console.log($('.speciality-select').select2('data'));
      var orto=false;
      var pros=false;
      var object='';
      $.each(object, function(idx, obj) {
         if(object[idx]['id']=='7'){//prosthodontics
            pros=true;
         }
         if(object[idx]['id']=='3'){
            orto=true;
         }
      });

      if(pros){//prosthodontics
         $('#prosTitle').show();
         $('#hasProsSpec').val(1);
         hasPros=true;
         //$('#prosthesis').show();
      } else {
         $('#prosTitle').hide();
         $('#hasProsSpec').val(0);
         hasPros=false;
         //$('.nav-tabs a[href="#prosthesis"]').hide();
         $("#form_patient_reg").validate(); //sets up the validator
         $( "#pros_observation" ).rules( "remove" );
         $( "#pros_limit" ).rules( "remove" );
         $( "#pro_reason_for_treatment" ).rules( "remove" );
      }


      if(orto){//orthodontics
         $('#ortoTitle').show();
         $('#hasOrtoSpec').val(1);
         hasOrto=true;
         //$('#orto').show();
      } else {
         $('#ortoTitle').hide();
         //$('#orto').hide();
         hasOrto=false;
         $('#hasOrtoSpec').val(0);
         $("#form_patient_reg").validate(); //sets up the validator
         $( "#anterior_ortho_treatment" ).rules( "remove" );
         $( "#ortho_reason_for_treatment" ).rules( "remove" );
         $( "#orto_motivation_level" ).rules( "remove" );
         $( "#otho_observation" ).rules( "remove" );
         $( "#ortho_planing_note" ).rules( "remove" );
      }
   });

   $("#vip").on('ifChanged',function() {
      if($(this).is(':checked')) {
         $('#is_vip').val(1);
      }else{
         $('#is_vip').val(0);
      }
   });

   $("#allow_profile_use").on('ifChanged',function() {
      if($(this).is(':checked')) {
         $('#allow_profile').val(1);
      }else{
         $('#allow_profile').val(0);
      }
   });

   $(".icheckbox_minimal-grey > input").on('ifChanged',function() {
      if($(this).is(':checked')) {
         $(this).val(1);
      }else{
         $(this).val(0);
      }
   });

   $("").on('ifChanged',function() {
      if($(this).is(':checked')) {
         $('#sms_conf').val(1);
      }else{
         $('#sms_conf').val(0);
      }
   });


   $("#cpfv").mask("999.999.999-99");
   $("#whatsapp_number").mask("(99) 99999-9999");
   $("#phone_landline").mask("(99) 9999-9999");
   $("#celular_1").mask("(99) 99999-9999");
   $("#celular_2").mask("(99) 99999-9999");
   $("#celular_3").mask("(99) 99999-9999");
   $("#celular_4").mask("(99) 99999-9999");

   $("#zip").mask("99999-999");
   /*
   $("input").blur(function() {
      $("#info").html("Unmasked value: " + $(this).mask());
   }).dblclick(function() {
      $(this).unmask();
   }); */

   $('[href=#health]').on('shown.bs.tab', function (e) {
      var notesHeight=".equalDivs";
      equalHeight(notesHeight);

      $('.disease').on('ifChanged', function(event){
         if($('.disease').is(":checked")){
            $("#hasDisease").val(1);
         }else{
            $("#hasDisease").val(0);
         }

      });

      e.preventDefault();
   });
   $('#addDenalPlan1').on('click',function(e){
      if($('#hideDP1').hasClass('dentalPlanHidden')){
         $('#hideDP1').removeClass('dentalPlanHidden');
         $('#hideDP1').addClass('dentalPlanVisible');
         $('#hasDentalPlan2').val(1);
         hasDentalPlan2
         $("#form_patient_reg").validate(); //sets up the validator
         $( "#cardExpDate2" ).rules( "add", {
           required: true
           //dateNL:true
         });
         $( "#DP_acd2" ).rules( "add", {
            pattern:/^[a-zA-Z\s]*$/
         });
         $( "#cardNo2" ).rules( "add", {
            digits:true,
            maxlength:25
         });
      }else{
         $('#hideDP1').removeClass('dentalPlanVisible');
         $('#hideDP1').addClass('dentalPlanHidden');
         $('#hasDentalPlan2').val(0);
         $("#form_patient_reg").validate(); //sets up the validator
         $( "#cardExpDate2" ).rules( "remove" );
         $( "#DP_acd2" ).rules( "remove" );
         $( "#cardNo2" ).rules( "remove" );
      }
      //alert("Clicked 1");
      e.preventDefault();
   });
   $('#addDenalPlan2').on('click',function(e){
      if($('#hideDP2').hasClass('dentalPlanHidden')){
         $('#hideDP2').removeClass('dentalPlanHidden');
         $('#hideDP2').addClass('dentalPlanVisible');
         $('#hasDentalPlan3').val(1);
         $("#form_patient_reg").validate(); //sets up the validator
         $( "#cardExpDate3" ).rules( "add", {
           required: true
         // dateNL:true
         });
         $( "#DP_acd3" ).rules( "add", {
            pattern:/^[a-zA-Z\s]*$/
         });
         $( "#cardNo3" ).rules( "add", {
            digits:true,
            maxlength:25
         });
      }else{
         $('#hideDP2').removeClass('dentalPlanVisible');
         $('#hideDP2').addClass('dentalPlanHidden');
         $('#hasDentalPlan3').val(0);
         $("#form_patient_reg").validate(); //sets up the validator
         $( "#cardExpDate3" ).rules( "remove" );
         $( "#DP_acd3" ).rules( "remove" );
         $( "#cardNo3" ).rules( "remove" );
      }
      //alert("Clicked 2");
      e.preventDefault();
   });
   $('[href=#orto]').on('shown.bs.tab', function (e) {
      var notesHeight=".equalDivs2";
      equalHeight(notesHeight);

      $('#orto-init-pic-date').html('');
      var d = new Date();

      var month = d.getMonth()+1;
      var day = d.getDate();

      var output = (day<10 ? '0' : '') + day + '/' +
         (month<10 ? '0' : '') + month + '/' +d.getFullYear() ;
      $('#orto-init-pic-date').html(output);

      $("#form_patient_reg").validate(); //sets up the validator
      $( "#anterior_ortho_treatment" ).rules( "add", {
        //required: true,
        pattern:/^[a-zA-Z\s]*$/
      });
      $( "#ortho_reason_for_treatment" ).rules( "add", {
         pattern:/^[a-zA-Z\s]*$/
      });
      $( "#orto_motivation_level" ).rules( "add", {
         pattern:/^[a-zA-Z\s]*$/
      });
      $( "#otho_observation" ).rules( "add", {
         pattern:/^[a-zA-Z\s]*$/
      });
      $( "#ortho_planing_note" ).rules( "add", {
         pattern:/^[a-zA-Z\s]*$/
      });
      $( "#patient_orto_init_img" ).rules( "add", {
         accept: "image/*",
         filesize:1000000
      });

      e.preventDefault();
   });
   $('[href=#dentalPlan]').on('shown.bs.tab', function (e) {
      $("#form_patient_reg").validate(); //sets up the validator
      $( "#cardExpDate1" ).rules( "add", {
        required: true,
      // dateNL:true
      });
      $( "#DP_acd1" ).rules( "add", {
         pattern:/^[a-zA-Z\s]*$/
      });
      $( "#cardNo1" ).rules( "add", {
         digits:true,
         maxlength:25
      });
      e.preventDefault();
      //alert("visible");
   });
   $('[href=#prosthesis]').on('shown.bs.tab', function (e) {
      var notesHeight=".equalDivs3";
      equalHeight(notesHeight);

      $('#pros-init-pic-date').html('');
      var d = new Date();

      var month = d.getMonth()+1;
      var day = d.getDate();

      var output = (day<10 ? '0' : '') + day + '/' +
         (month<10 ? '0' : '') + month + '/' +d.getFullYear() ;
      $('#pros-init-pic-date').html(output);



      $("#form_patient_reg").validate(); //sets up the validator
      $( "#pro_reason_for_treatment" ).rules( "add", {
         pattern:/^[a-zA-Z\s]*$/
      });
      $( "#pros_limit" ).rules( "add", {
         pattern:/^[a-zA-Z\s]*$/
      });
      $( "#pros_observation" ).rules( "add", {
         pattern:/^[a-zA-Z\s]*$/
      });

      $( "#patient_pros_init_img" ).rules( "add", {
         accept: "image/*",
         filesize:1000000
      });


      e.preventDefault();
   });

   $('#save').on('click',function(event){
      errorHandler3.hide();
      $('#form_patient_reg').submit();
      event.preventDefault();
   });
   FormElements.init();

   var data1 = [
      {
         value: 200,
         /* color:"rgba(169,169,169,.5)", */
         color:"rgba(85,85,255,.5)",
         highlight: "rgba(85,85,255,.8)",
         label: "Credit",
      },
      {
         value: 100,
         color: "rgba(82,255,85,0.5)",
         highlight: "rgba(82,255,85,0.8)",
         label: "Cash"
      }
   ];
   var data2 = [
      {
         value: 200,
         /* color:"rgba(169,169,169,.5)", */
         color:"rgba(85,255,255,.5)",
         highlight: "rgba(85,255,255,.8)",
         label: "Ortho",
      },
      {
         value: 100,
         color: "rgba(173,255,47,0.5)",
         highlight: "rgba(173,255,47,0.8)",
         label: "General"
      }
   ];
   // var ctx1 = $("#treatment").get(0).getContext("2d");
   // var treatmentPieChart;
   // var ctx2 = $("#dplan").get(0).getContext("2d");
   // var dplanPieChart;
   // $('[href=#stats]').on('shown.bs.tab', function (e) {
   //    dplanPieChart=new Chart(ctx1).Pie(data1, {responsive: true,maintainAspectRatio: true});
   //    treatmentPieChart=new Chart(ctx2).Pie(data2, {responsive: true,maintainAspectRatio: true});
   //    document.getElementById('js-legend1').innerHTML = dplanPieChart.generateLegend();
   //    document.getElementById('js-legend2').innerHTML = treatmentPieChart.generateLegend();
   // });

   PagesUserProfile.init();



   // opening appointment subview
   $('.view_patient_appointment').click(function(){
      var subViewContent = $('#appointment_modal');
      $.subview({
         content: subViewContent,
         onShow: function() {
         },
         onHide: function() {
         }
      });
   })

});
