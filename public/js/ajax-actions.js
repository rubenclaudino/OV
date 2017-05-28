$(document).ready(function () {

    $('body').on("click", '.close_subview', function () {
        $.hideSubview();
    });

    /**
     * PRINTING TABLES
     **/

    $(function () {
        $(".print").on('click', function () {
            $id = $(this).attr('data-id');
            $("#" + $id).print({

                // Use Global styles
                globalStyles: false,

                // Add link with attrbute media=print
                mediaPrint: true,

                //Custom stylesheet
                stylesheet: "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css",

                //Print in a hidden iframe
                iframe: false,

                // Don't print this
                noPrintSelector: ".avoid-this",

                // Add this on top
                append: "",

                // Add this at bottom
                prepend: "",

                // Manually add form values
                manuallyCopyFormValues: true,

                // resolves after print and restructure the code for better maintainability
                deferred: $.Deferred(),

                // timeout
                timeout: 250,

                // Custom title
                title: null,

                // Custom document type
                doctype: '<!doctype html>'
            });
        });
    });

    /**
     * AJAX ACTIONS FOR CLINIC
     **/

    // delete clinic

    $('body').on('click', '.deleteClinic', function () {
        $t = $(this);
        $val = $(this).attr('data-id');

        swal({
                title: "Excluir Clínica",
                text: "Quer excluir essa Clínica?",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function () {
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: APP_URL + '/clinic/' + $val,
                        data: {_method: 'DELETE', "id": $val, "_token": csrf_token},
                        success: function (data) {
                            swal('Clínica excluída com sucesso!', '', 'success');
                            //deleting table row
                            var row = $t.closest('tr');
                            $('.dataTable').dataTable().fnDeleteRow(row);
                        }
                    });
                });
            });
    });

    /**
     * AJAX ACTIONS FOR PERMISSIONS BLOCKS
     **/

    // adding or removing permissions

    $('body').on('click', '.clickPermissions', function () {
        $t = $(this);
        $pid = $(this).attr('data-permissionid');
        $rid = $(this).attr('data-roleid');


        if ($(this).is(":checked")) {
            $.ajax({
                type: "POST",
                url: APP_URL + '/permissions/saveRole',
                data: {"_method": 'POST', "pid": $pid, "rid": $rid, "_token": csrf_token},
                success: function (data) {
                    $id = data;
                    $t.attr('data-id', $id);
                    toastr.success('Permissão adicionada a esse modelo!');
                }
            });
        } else {
            $id = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url: APP_URL + '/permissions/' + $id,
                data: {_method: 'DELETE', "id": $id, "_token": csrf_token},
                success: function (data) {
                    toastr.success('Permissão excluída desse modelo!');
                }
            });
        }
    });

    // delete clinic

    $('body').on('click', '.deletePermission', function () {
        $t = $(this);
        $val = $(this).attr('data-id');

        swal({
                title: "Excluir Permissão",
                text: "Quer excluir essa Permissão?",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function () {
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: APP_URL + '/permissions/' + $val,
                        data: {_method: 'DELETE', "id": $val, "_token": csrf_token},
                        success: function (data) {
                            swal(data.message, '', 'success');
                            //deleting table row
                            var row = $t.closest('tr');
                            $('.dataTable').dataTable().fnDeleteRow(row);
                        }
                    });
                });
            });
    });

    /**
     * SAVING PATIENT
     **/

    $('#savePatient').submit(function (event) {
        var formData = $('#savePatient').serializeObject();

        var f = $('#savePatient')[0];
        var d = new FormData(f);
        $action = $('#savePatient').attr('action');

        $.ajax({
            type: "POST",
            url: $action,
            data: d,
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            success: function (data) {
                toastr.success('Cadastro atualizado com sucesso!');
                //deleting table row
                return false;
            }
        });
        return false;
    });

    $('#savePatientHealth').submit(function (event) {
        var formData = $('#savePatientHealth').serializeObject();
        formData.action = 'save_health';
        $action = $(this).attr('action');

        // getting all checkboxes
        var diseases = new Object();
        $('#savePatientHealth input[type=checkbox]').each(function () {
                // attach matched element names to the formData with a chosen value.
                var emptyVal = "";
                $name = $(this).attr('data-id');
                $value = $(this).val();
                diseases[$name] = $value;
            }
        );
        formData.disease = diseases;

        $.ajax({
            type: "POST",
            url: $action,
            data: formData,
            success: function (data) {
                toastr.success('Cadastro atualizado com sucesso!');
                //deleting table row
            }
        });
        return false;
    });

    /**
     * DELETE RECEPNIST
     * */

    $('body').on('click', '.deleteRecepnist', function () {
        $t = $(this);
        $val = $(this).attr('data-id');

        swal({
                title: "Excluir Recepcionista",
                text: "Quer excluir esssa recepcionista?",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function () {
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: APP_URL + '/recepnists/' + $val,
                        data: {_method: 'DELETE', "id": $val, "_token": csrf_token},
                        success: function (data) {
                            if (data.status == "success") {
                                toastr.success(data.message);
                                //deleting table row
                                var row = $t.closest('tr');
                                $('.dataTable').dataTable().fnDeleteRow(row);
                            } else {
                                toastr.error(data.message);
                            }
                        }
                    });
                });
            });
    });

    /**
     * POTENTIAL CLIENTS ALL ACTIONS addDevUpdate
     **/

    $('#addPotentialClient').submit(function (event) {
        var formData = $('#addPotentialClient').serializeObject();

        $action = $(this).attr('action');
        $.ajax({
            type: "POST",
            url: $action,
            data: formData,
            success: function (data) {
               if (data.status == 'success') {
                   toastr.success(data.message);
               } else {
                   toastr.error(data.message);
               }
            }
        });
        return false;
    });

    $('#updatePotentialClients').submit(function (event) {
        var formData = $('#updatePotentialClients').serializeObject();

        $action = $(this).attr('action');
        $.ajax({
            type: "POST",
            url: $action,
            data: formData,
            success: function (data) {
                if (data.status == 'success') {
                    toastr.success(data.message);
                } else {
                    toastr.error(data.message);
                }
            }
        });
        return false;
    });

    $('body').on('click', '.deleteClient', function () {
        $t = $(this);
        $val = $(this).attr('data-id');

        swal({
                title: "Excluir Cliente",
                text: "Quer excluir esse cliente?",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function () {
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: APP_URL + '/potentialclients/' + $val,
                        data: {_method: 'DELETE', "id": $val, "_token": csrf_token},
                        success: function (data) {
                            if (data.status == "success") {
                                swal(data.message, '', 'success');
                                //deleting table row
                                var row = $t.closest('tr');
                                $('.dataTable').dataTable().fnDeleteRow(row);
                            } else {
                                swal(data.message, '', 'error')
                            }
                        }
                    });
                });
            });
    });


    /**
     * DEV UPDATES ALL ACTIONS
     **/

    $('#addDevUpdate').submit(function (event) {
        var formData = $('#addDevUpdate').serializeObject();

        $action = $(this).attr('action');
        $.ajax({
            type: "POST",
            url: $action,
            data: formData,
            success: function (data) {
                if (data.status == 'success') {
                    toastr.success(data.message);
                } else {
                    toastr.error(data.message);
                }
            }
        });
        return false;
    });

    /**
     * TREATMENT TYPE ALL ACTIONS
     **/

    $('body').on('click', '#saveTreatmentPlan', function () {
        var formData = $('#editTreatmentPlan').serializeObject();
        $action = $("#editTreatmentPlan").attr('action');
        $.ajax({
            type: "POST",
            url: $action,
            data: formData,
            success: function (data) {
                if (data.status == 'success') {
                    toastr.success(data.message);
                } else {
                    toastr.error(data.message);
                }
            }
        });
        return false;
    })

    // create

    $("#createTreatmentPlan").validate({
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
            title: {required: true},
            price: {required: true},
            tuss_code: {required: true},
            speciality: {required: true},
            default_percentage: {required: true},
        },
        submitHandler: function (form) {
            var formData = $('#createTreatmentPlan').serializeObject();
            $action = $('#createTreatmentPlan').attr('action');
            $.ajax({
                type: "POST",
                url: $action,
                data: formData,
                success: function (data) {
                    if (data.status == 'success') {
                        $("#createTreatmentPlan")[0].reset();
                        toastr.success(data.message);
                    } else {
                        toastr.error(data.message);
                    }
                }
            });
            return false;
        }
    });

    /**
     * DELETE ITEM
     * */

    $('body').on('click', '.deleteItem', function () {
        $t = $(this);
        $val = $(this).attr('data-id');
        swal({
                title: "Excluir Item",
                text: "Quer excluir esse item?",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function () {
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: APP_URL + '/stockcontrol/' + $val,
                        data: {_method: 'DELETE', "id": $val, "_token": csrf_token},
                        success: function (data) {
                            if (data.status == "success") {
                                //toastr.success(data.message);
                                //deleting table row
                                var row = $t.closest('tr');
                                $('.dataTable').dataTable().fnDeleteRow(row);
                                swal(data.message, '', 'success');
                            } else {
                                swal(data.message, '', 'error');
                            }
                        }
                    });
                });
            });

    });
    /**
     * DELETE Contact
     * */

    $('body').on('click', '.deleteProcedure', function () {
        $t = $(this);
        $val = $(this).attr('data-id');

        swal({
                title: "Excluir Procedimento",
                text: "Quer excluir esse procedimento?",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function () {
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: APP_URL + '/procedures/' + $val,
                        data: {_method: 'DELETE', "id": $val, "_token": csrf_token},
                        success: function (data) {
                            if (data.status == "success") {
                                swal(data.message, '', 'success');
                                //deleting table row
                                var row = $t.closest('tr');
                                $('.dataTable').dataTable().fnDeleteRow(row);
                            } else {
                                swal(data.message, '', 'error')
                            }
                        }
                    });
                });
            });
    });

    /**
     * DELETE Contact
     * */

    $('body').on('click', '.deleteContact', function () {
        $t = $(this);
        $val = $(this).attr('data-id');

        swal({
                title: "Excluir Contato",
                text: "Quer excluir esse contato?",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function () {
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: APP_URL + '/contacts/' + $val,
                        data: {_method: 'DELETE', "id": $val, "_token": csrf_token},
                        success: function (data) {
                            if (data.status == "success") {
                                swal(data.message, '', 'success');
                                //deleting table row
                                var row = $t.closest('tr');
                                $('.dataTable').dataTable().fnDeleteRow(row);
                            } else {
                                swal(data.message, '', 'error')
                            }
                        }
                    });
                });
            });
    });

    /**
     * ADD ITEMS INTO AN ARRAY
     **/

    var clinicItems = [];
    $('.btn-addSelectedItems').click(function () {
        $i = 0;
        clinicItems = [];
        $('.itemsTable tbody tr').each(function () {
            $t = $(this);
            if ($(this).children('td:first-child').children('input[type=checkbox]').is(":checked")) {
                var item = {};
                $title = $(this).children('td:first-child').children('input[type=checkbox]').attr('data-title');
                $id = $(this).children('td:first-child').children('input[type=checkbox]').attr('data-id');
                item.id = $id;
                item.title = $title;

                function hasId(data, id) {
                    return data.some(function (el) {
                        return el.id === id;
                    });
                }

                if (hasId(clinicItems, $id) == false) {
                    clinicItems.push(item);
                }
            }
        });

        // adding items into table
        if (clinicItems.length > 0) {
            $html = '';
            for ($i = 0; $i < clinicItems.length; $i++) {
                $html += "<tr>";
                $html += "<td>" + clinicItems[$i].title + "</td>";
                $columnLength = $('.quoteItemsTable thead th').length - 2;
                while ($columnLength > 0) {
                    $html += "<td><input type='text' class='form-control' style='width:100px;min-height32px;' placeholder='Price'></td>";
                    $columnLength--;
                }
                $html += "<td class='center'><i class='fa fa-trash deleteQuoteRow' style='pointer:cursor;'></i></td>";
                $html += "</tr>";
            }
            $('.quoteItemsTable').append($html);
            clinicItems = [];
        }
        $('#addItemModal').modal('hide');
    });

    var clinicContacts = [];
    $('.btn-addSelectedContacts').click(function () {
        $i = 0;
        clinicContacts = [];
        $('.contactsTable tbody tr').each(function () {
            $t = $(this);
            if ($(this).children('td:first-child').children('input[type=checkbox]').is(":checked")) {
                var item = {};
                $title = $(this).children('td:first-child').children('input[type=checkbox]').attr('data-title');
                $id = $(this).children('td:first-child').children('input[type=checkbox]').attr('data-id');
                item.id = $id;
                item.title = $title;

                function hasId(data, id) {
                    return data.some(function (el) {
                        return el.id === id;
                    });
                }

                if (hasId(clinicItems, $id) == false) {
                    clinicContacts.push(item);
                }
            }
        });

        // adding items into table
        if (clinicContacts.length > 0) {
            console.log(clinicContacts);
            $html = '';

            // adding th
            for ($i = 0; $i < clinicContacts.length; $i++) {
                $html += "<th>" + clinicContacts[$i].title + "</th>";
            }
            $('.quoteItemsTable thead th:first-child').after($html);

            // adding td
            $html = '';

            //getting how many tr in the tbody

            $trLength = $('.quoteItemsTable tbody tr').length;
            console.log("Tr Length" + $trLength);

            $columnLength = $('.quoteItemsTable thead th').length - 2;
            $i = 1;
            while ($trLength > 0) {
                for ($k = 1; $k <= $columnLength; $k++) {
                    if (($('.quoteItemsTable tbody tr:nth-child(' + $i + ') td').length) == ($('.quoteItemsTable thead th').length)) {
                    }
                    else {
                        $html = "<td><input type='text' class='form-control' style='width:100px;min-height:32px;' placeholder='Preço'></td>";
                        $('.quoteItemsTable tbody tr:nth-child(' + $i + ') td:nth-child(' + $columnLength + ')').after($html);
                    }
                }
                $i++;
                $trLength--;
            }
            clinicContacts = [];

        }

        $('#addContactModal').modal('hide');

    });

    // deleting row for quote items

    $('body').on('click', '.deleteQuoteRow', function () {
        $(this).closest('tr').remove();
    })

    // print function for quote table

    // $('.quoteItemsTable').DataTable( {
    //    dom: 'Bfrtip',
    //      buttons: [
    //          'print'
    //      ]
    //  } );

    /**
     * ITEMS MODAL
     * */

    $('.stockModalOpen').click(function () {
        $t = $(this);
        var id = $t.attr('data-id');
        var title = $t.attr('data-title') // Extract info from data-* attributes
        var quantity = $t.attr('data-quantity') // Extract info from data-* attributes
        var modal = $("#stockModal");
        modal.find('.item-title').text(title);
        modal.find('.item-quantity').text(quantity);
        modal.find('form input[name=id]').val(id);
    });

    /**
     * GETTING HISTORY OF STOCK
     **/

    $('body').on('click', '.btn-history', function () {
        $t = $(this);
        var id = $t.attr('data-id');
        $.blockUI({
            message: '<i class="fa fa-spinner fa-spin"></i> Buscando Histórico do item ...'
        });
        $.ajax({
            type: "POST",
            url: APP_URL + '/getItemHistory/' + id,
            data: {_method: 'GET', "_token": csrf_token},
            success: function (data) {
                $.unblockUI();
                if (data.status == "success") {
                    var string = '';
                    $data = data.data;
                    for ($i = 0; $i < $data.length; $i++) {
                        string += '<tr><td>' + $data[$i].id + '</td><td>' + $data[$i].item.title + '</td><td class="text-capitalize">' + $data[$i].action + '</td><td>' + $data[$i].quantity + '</td><td>' + new Date($data[$i].created_at).toUTCString() + '</td></tr>';
                    }
                    $('#historyModal table tbody').html(string);
                    $('#historyModal').modal('show');
                } else {
                    toastr.error(data.message);
                }
            }
        });
    });

    /**
     * DELETE Patient
     * */

    $('body').on('click', '.deletePatient', function () {
        $t = $(this);
        $val = $(this).attr('data-id');

        swal({
                title: "Excluir Paciente",
                text: "Quer excluir esse paciente?",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function () {
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: APP_URL + '/patients/' + $val,
                        data: {_method: 'DELETE', "id": $val, "_token": csrf_token},
                        success: function (data) {
                            if (data.status == "success") {
                                swal(data.message, '', 'success');
                                //deleting table row
                                var row = $t.closest('tr');
                                $('.dataTable').dataTable().fnDeleteRow(row);
                            } else {
                                swal(data.message, '', 'error');
                            }
                        }
                    });
                });
            });
    });

    // APPOINTMENT PATIENT DROPDOWN GETTING PATIENTS

    $("#searchform input").on("keyup", function () {
        $text = $(this).val();
        if ($text == '') {
            $('.patient_search_dropdown').remove();
        }
        $thisVar = $(this);
        // doing ajax
        $.ajax({
            url: APP_URL + '/patients/getPatients',
            method: "POST",
            data: {"name": $text, "_token": csrf_token, "_method": "POST"},
            success: function (data) {
                if (data != 'error') {
                    $html = "<ul class='patient_search_dropdown'>";
                    for ($i = 0; $i < data.length; $i++) {
                        $phone = data[$i].phone_1;
                        if ($phone == '') {
                            $phone = 'Nenhum numero de contato encontrado!';
                        }
                        $html += "<li><a href='" + APP_URL + '/patients/' + data[$i].id + "'>" + data[$i].first_name + " " + data[$i].last_name + " </a></li>";
                    }
                    $html += "</ul>";
                    $thisVar.parent().parent().children('ul').remove();
                    $thisVar.parent().parent().append($html);
                } else {
                    $html = "<ul class='patient_search_dropdown'>";
                    for ($i = 0; $i < data.length; $i++) {
                        $phone = data[$i].phone_1;
                        if ($phone == '') {
                            $phone = 'Nenhum numero de contato encontrado!';
                        }
                        $html += "<li><a href='" + APP_URL + '/patients/' + data[$i].id + "'>" + data[$i].first_name + " " + data[$i].last_name + "</a></li>";
                    }
                    $html += "</ul>";
                }
            }
        });
    });

    // delete user

    $('body').on('click', '.deleteMain', function () {
        $t = $(this);
        $val = $(this).attr('data-id');

        swal({
                title: "Excluir Usuário",
                text: "Quer excluir esse usuário?",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function () {
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: APP_URL + '/user/' + $val,
                        data: {_method: 'DELETE', "id": $val, "_token": csrf_token},
                        success: function (data) {
                            swal(data.message, '', 'success');
                            //deleting table row
                            var row = $t.closest('tr');
                            $('.dataTable').dataTable().fnDeleteRow(row);
                        }
                    });
                });
            });
    });

    /* JQUERY STEPS FOR FIRST TIME */

    //jQuery time

    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $("#form1").validate({
        rules: {
            first_name: {required: true},
            last_name: {required: true},
            gender: {required: true},
            dob: {required: true},
        }
    });

    $("#form2").validate({
        rules: {}
    });

    $(".next").click(function () {
        $t = $(this);
        $id = $(this).attr('data-id');
        if ($("#" + $id).valid()) {

            var formData = $('#form1').serializeObject();
            $action = $('#form1').attr('action');

            // saving data
            $.ajax({
                type: "POST",
                url: $action,
                data: formData,
                success: function (data) {
                    if (data.status == 'success') {
                        if (animating) return false;
                        animating = true;

                        current_fs = $t.parent().parent();
                        next_fs = $t.parent().parent().next();
                        //activate next step on progressbar using the index of next_fs
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        //show the next fieldset
                        next_fs.show();
                        //hide the current fieldset with style
                        current_fs.animate({opacity: 0}, {
                            step: function (now, mx) {
                                //as the opacity of current_fs reduces to 0 - stored in "now"
                                //1. scale current_fs down to 80%
                                scale = 1 - (1 - now) * 0.2;
                                //2. bring next_fs from the right(50%)
                                left = (now * 50) + "%";
                                //3. increase opacity of next_fs to 1 as it moves in
                                opacity = 1 - now;
                                current_fs.css({
                                    'transform': 'scale(' + scale + ')',
                                    'position': 'absolute'
                                });
                                next_fs.css({'left': left, 'opacity': opacity});
                            },
                            duration: 800,
                            complete: function () {
                                current_fs.hide();
                                animating = false;
                            },
                            //this comes from the custom easing plugin
                            easing: 'easeInOutBack'
                        });
                    }
                    if (data.status == 'error') {
                        toastr.error(data.message);
                    }
                }
            });
        }
    });

    $(".previous").click(function () {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent().parent();
        previous_fs = $(this).parent().parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function () {
        return false;
    })

});
