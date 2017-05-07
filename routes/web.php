<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// cancelling subscription
/*
Route::post(
    'stripe/webhook',
    '\Laravel\Cashier\Http\Controllers\WebhookController@handleWebhook'
);*/

Route::group(['middleware' => [/*'subscriptions', 'permissions', 'firsttime'*/]], function () {
    //Route::resource('appointment', 'AppointmentController');
    Route::get('user/invoices', 'UsersController@invoices');
    Route::get('user/invoice/{invoice}', function (Request $request, $invoiceId) {
        return $request->user()->downloadInvoice($invoiceId, [
            'vendor' => 'Odontovision',
            'product' => 'Subscription',
        ]);
    });
    Route::get('users/permission', 'UsersController@permission');

    Route::resource('users', 'UsersController');

    Route::get('home/joinus', 'HomeController@joinus');
    Route::resource('home', 'HomeController');
    Route::resource('clinic', 'ClinicController');
    Route::resource('dentists', 'DentistsController');

    Route::post('exams/get', 'PatientExamsController@getExams');
    Route::resource('exams', 'PatientExamsController');

    Route::post('pictogram/getPictogram', 'PictogramController@getPictogram');
    Route::resource('pictogram', 'PictogramController');

    Route::post('patients/getPatients', 'PatientsController@getPatientList');
    Route::get('patients/stats', 'PatientsController@stats');
    Route::resource('patients', 'PatientsController');

    Route::get('calendar/appointmentdetails/{id}', 'CalendarController@appointmentdetails');
    Route::put('calendar/updateStatus/{id}', 'CalendarController@updateStatus');
    Route::get('calendar/appointmentTypes', 'CalendarController@appointmentTypes');
    Route::post('calendar/addAppointmentType', 'CalendarController@addAppointmentTypes');
    Route::post('calendar/updateAppointment/{id}', 'CalendarController@updateAppointment');
    Route::post('calendar/addDocument', 'CalendarController@addDocument');
    Route::post('calendar/deleteDocument/{id}', 'CalendarController@deleteDocument');
    Route::post('calendar/getPatientTreatmentDocuments', 'CalendarController@getPatientTreatmentDocuments');
    Route::post('calendar/addQuotation', 'CalendarController@addQuotation');
    Route::post('calendar/getQuotation', 'CalendarController@getQuotation');
    Route::post('calendar/summary', 'CalendarController@summary');

    Route::post('calendar/getTodaysEvents', 'CalendarController@getTodaysEvent');
    Route::resource('calendar', 'CalendarController');

    Route::resource('holidays', 'HolidaysController');
    Route::resource('recepnists', 'RecepnistsController');

    // Route::get('treatments/treatmentTypes','TreatmentController@treatmentTypes');
    // Route::post('treatments/addTreatmentType','TreatmentController@addTreatmentTypes');
    Route::post('treatments/getPatientTreatment', 'TreatmentController@getPatientTreatment');
    Route::resource('treatments', 'TreatmentController');

    Route::get('specialities/get', 'SpecialityController@get');
    Route::resource('specialities', 'SpecialityController');

    Route::resource('treatmenttypes', 'TreatmentTypesController');

    Route::get('dentalplans/permission', 'DentalplansController@permission');
    Route::resource('dentalplans', 'DentalplansController');

    Route::get('permissions/addPermissions', 'PermissionsController@addPermissions');
    //Route::get('permissions/assign','PermissionsController@assign');
    Route::get('permissions/assignPermissions', 'PermissionsController@assign');
    Route::post('permissions/saveRole', 'PermissionsController@saveRole');
    Route::resource('permissions', 'PermissionsController');

    Route::get('quoteitems', 'StockControlController@quoteItems');
    Route::get('getItemHistory/{id}', 'StockControlController@getItemHistory');
    Route::put('updateStock/{id}', 'StockControlController@updateStock');
    Route::resource('stockcontrol', 'StockControlController');
    Route::resource('contacts', 'ItemContactsController');

    Route::put('potentialclients/{id}', 'PotentialClientsController@update');
    Route::resource('potentialclients', 'PotentialClientsController');
    Route::get('newclients', 'PotentialClientsController@newclients');

    Route::post('devupdates', 'DevUpdatesController@create');
    Route::put('devupdates/{id}', 'DevUpdatesController@update');
    Route::resource('devupdates', 'DevUpdatesController');

    Route::resource('investors', 'InvestorsController');
    Route::get('investors', 'InvestorsController@show');

    Route::put('updateReminderUserStatus/{id}', 'ReminderController@updateReminderUserStatus');
    Route::put('updateStatus/{id}', 'ReminderController@updateStatus');
    Route::put('unmarkReminder/{id}', 'ReminderController@unmarkReminder');
    Route::resource('reminders', 'ReminderController');

    Route::resource('agenda', 'AgendaController');
    Route::resource('holidays', 'HolidaysController');

    Route::resource('firsttime', 'FirstimeController');

});

Route::get('billing/subscribe', 'UserBilling@subscribeuser');
Route::resource('billing', 'UserBilling');
