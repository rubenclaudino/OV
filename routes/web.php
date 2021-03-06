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

Route::group(['middleware' => ['auth', 'web' /*'subscriptions', 'permissions', 'firsttime'*/]], function () {
    //Route::resource('appointment', 'AppointmentController');

    // USERS
    Route::get('user/invoices', 'UsersController@invoices');
    Route::get('user/invoice/{invoice}', function (Request $request, $invoiceId) {
        return $request->user()->downloadInvoice($invoiceId, [
            'vendor' => 'Odontovision',
            'product' => 'Subscription',
        ]);
    });
    Route::resource('users', 'UsersController');

    Route::get('home/joinus', 'HomeController@joinus');
    Route::resource('home', 'HomeController');
    Route::resource('clinic', 'ClinicController');

    // BUGS
    Route::resource('bugs', 'BugsController');

    // EXAMS
    Route::post('exams/get', 'PatientExamsController@getExams');
    Route::resource('exams', 'PatientExamsController');

    // PICTOGRAM
    Route::post('pictogram/getPictogram', 'PictogramController@getPictogram');
    Route::resource('pictogram', 'PictogramController');

    // PATIENTS
    Route::post('patients/getPatients', 'PatientsController@getPatientList');
    Route::get('patients/stats', 'PatientsController@stats');
    Route::resource('patients', 'PatientsController');
    Route::post('patients/saveQuickpatient', 'PatientsController@saveQuickpatient');

    // PROCEDURES
    // Route::get('procedures/treatmentTypes','ProceduresController@treatmentTypes');
    // Route::post('procedures/addTreatmentType','ProceduresController@addTreatmentTypes');
    Route::post('procedures/getPatientTreatment', 'ProceduresController@getPatientTreatment');
    Route::resource('procedures', 'ProceduresController');

    // SPECIALTIES
    Route::get('specialties/get', 'SpecialtiesController@get');
    Route::resource('specialties', 'SpecialtiesController');

    // REVIEW --- POSSIBLE DELETE
    Route::resource('holidays', 'HolidaysController');
    Route::resource('dentists', 'DentistsController');

    // DENTAL PLANS
    Route::get('dentalplans/permission', 'ClinicDentalPlansController@permission');
    Route::resource('dentalplans', 'ClinicDentalPlansController');

    // PERMISSIONS
    Route::get('permissions/addPermissions', 'PermissionsController@addPermissions');
    //Route::get('permissions/assign','PermissionsController@assign');
    Route::get('permissions/assignPermissions', ['as' => 'permissions.assign_permissions', 'uses' => 'PermissionsController@assign']);
    Route::post('permissions/saveRole', 'PermissionsController@saveRole');
    Route::resource('permissions', 'PermissionsController');
    Route::get('users/permission', 'UsersController@permission');

    // STOCKCONTROL
    Route::get('quoteitems', 'StockControlController@quoteItems');
    Route::get('getItemHistory/{id}', 'StockControlController@getItemHistory');
    Route::put('updateStock/{id}', 'StockControlController@updateStock');
    Route::resource('stockcontrol', 'StockControlController');

    // CONSULTATION
    Route::resource('consultation', 'ConsultationController');

    // CONTACTS
    Route::resource('contacts', 'ContactsController');

    // FINANCE / PAYMENTS
    Route::resource('payments', 'PaymentsController');

    // POTENTIAL CLIENTS
    Route::put('potentialclients/{id}', 'PotentialClientsController@update');
    Route::resource('potentialclients', 'PotentialClientsController');
    Route::get('newclients', 'PotentialClientsController@newclients');

    // DEVELOPER UPDATES
    Route::post('devupdates', 'DevUpdatesController@create');
    Route::put('devupdates/{id}', 'DevUpdatesController@update');
    Route::resource('devupdates', 'DevUpdatesController');

    // INVESTORS
    Route::resource('investors', 'InvestorsController');
    Route::get('investors', 'InvestorsController@show');

    // REMINDERS
    Route::put('updateReminderUserStatus/{id}', 'ReminderController@updateReminderUserStatus');
    Route::put('updateStatus/{id}', 'ReminderController@updateStatus');
    Route::put('unmarkReminder/{id}', 'ReminderController@unmarkReminder');
    Route::resource('reminders', 'ReminderController');

    // AGENDA
    Route::resource('agenda', 'AgendaController');
    Route::resource('holidays', 'HolidaysController');
    Route::post('calendar/getTodaysEvents', 'CalendarController@getTodaysEvent');
    Route::get('calendar/appointmentdetails/{id}', 'CalendarController@appointmentdetails');
    Route::put('calendar/updateStatus/{id}', 'CalendarController@updateStatus');

    Route::get('calendar/appointmentTypes', ['as' => 'calendar.appointment_types', 'uses' => 'CalendarController@appointmentTypes']);
    Route::post('calendar/addAppointmentType', 'CalendarController@addAppointmentTypes');

    Route::post('calendar/updateAppointment/{id}', 'CalendarController@updateAppointment');
    Route::post('calendar/addDocument', 'CalendarController@addDocument');
    Route::post('calendar/deleteDocument/{id}', 'CalendarController@deleteDocument');
    Route::post('calendar/getPatientTreatmentDocuments', 'CalendarController@getPatientTreatmentDocuments');
    Route::post('calendar/addQuotation', 'CalendarController@addQuotation');
    Route::post('calendar/getQuotation', 'CalendarController@getQuotation');
    Route::post('calendar/summary', 'CalendarController@summary');
    Route::resource('calendar', 'CalendarController');

    // USER FIRST TIME
    Route::resource('firsttime', 'FirstTimeController');
});

Route::get('billing/subscribe', 'UserBillingController@subscribeuser');
Route::resource('billing', 'UserBillingController');
