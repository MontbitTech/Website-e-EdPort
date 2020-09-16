<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Certificate Controller
Route::get('/tcpdf/{id?}', 'CertificateController@index')->name('createPDF');
Route::middleware('admin')->group(function () {
    Route::get('/registeruser', 'Auth\RegisterController@create')->name('registershow');
    Route::post('/registeruser', 'Auth\RegisterController@store')->name('registeruser');
    Route::get('/certificates', 'CertificateController@certificates')->name('certificate');
    Route::post('/savecertificate', 'CertificateController@savecertificate')->name('savecertificate');
    Route::post('/savecourse', 'CertificateController@savecourse')->name('savecourse');
    Route::post('/updatecourse', 'CertificateController@updatecourse')->name('updatecourse');
    Route::get('/course', 'CertificateController@course')->name('course');
    Route::post('/getcourse', 'CertificateController@getcourse')->name('getcourse');
    Route::get('/home', 'CertificateController@index')->name('home');
    //Teacher Controller
    Route::get('/teachers', 'TeacherController@teachers')->name('teachers');
    Route::post('/saveteacher', 'TeacherController@saveteacher')->name('saveteacher');

    Route::get('/contacts/delete/{id}', 'ContactController@delete')->name('contacts.delete');
});
Route::middleware('auth')->group(function () {
    Route::post('/showcity', 'ContactController@showcity')->name('showcity');
    Route::post('/entitymail', 'ContactController@entitymail')->name('entitymail');
    Route::get('/contacts', 'ContactController@contacts')->name('contacts');
    Route::get('/contacts/edit/{id}', 'ContactController@edit')->name('contacts.edit');
    Route::post('/contacts/update/{id}', 'ContactController@update')->name('contacts.update');
    Route::post('/sendmail', 'ContactController@sendmail')->name('sendmail');
    Route::post('/updatecontactstatus', 'ContactController@updatecontactstatus')->name('updatecontactstatus');
});
// form register


Route::get('/registerteacher', 'TeacherController@registerteacher')->name('registerteacher');

Auth::routes();


//Home Controller
Route::get('/', 'HomeController@index')->name('index');
Route::get('/get-in-touch', 'HomeController@saveshow')->name('showteacher.show');
Route::post('/savecontact', 'HomeController@savecontact')->name('savecontact');
Route::get('/schedule-free-call', function () {
    return view('freecall');
})->name('freecall');
Route::post('/getcity', 'HomeController@getcity')->name('getcity');
Route::get('/termsandconditions', function () {
    return view('website.termandcondition');
})->name('termsandconditions');
Route::get('/privacypolicies', function () {
    return view('website.privacypolicy');
})->name('privacypolicies');
Route::get('/faq', function () {
    return view('website.faq');
})->name('faq');

// Products 
Route::get('/products/e-EdPort-Virtual-Classroom-Solution', function () {
    return view('website.products.virtualClassroom');
})->name('products.classroomsolution');

Route::get('/products/e-EdPort-Student-Self-Learning-Solution', function () {
    return view('website.products.StudentSelf-Learning');
})->name('products.StudentSelf-Learning');

Route::get('/products/e-EdPort-Parental-Control-App', function () {
    return view('website.products.ParentalControl');
})->name('products.ParentalControl');

// Services
Route::get('/services/e-EdPort-Smart-Teacher-Training', function () {
    return view('website.services.TeacherTraining');
})->name('services.TeacherTraining');

Route::get('/services/e-EdPort-Smart-Teacher-Certification', function () {
    return view('website.services.TeacherCertification');
})->name('services.TeacherCertification');

Route::get('/services/e-EdPort-Student-Career-Counselling', function () {
    return view('website.services.CareerCounselling');
})->name('services.CareerCounselling');


// Resources
Route::get('/resources/Brochure', function () {
    return view('website.resources.brochure');
})->name('resources.brochure');

Route::get('/resources/Events', function () {
    return view('website.resources.events');
})->name('resources.events');

Route::get('/resources/FAQ’s', function () {
    return view('website.resources.faqs');
})->name('resources.faqs');


// About 
Route::get('/about/Company-Overview', function () {
    return view('website.about.companyOverview');
})->name('about.companyOverview');

Route::get('/about/Leadership-Team', function () {
    return view('website.about.leadershipTeam');
})->name('about.leadershipTeam');

Route::get('/about/Latest-News', function () {
    return view('website.about.latestNews');
})->name('about.latestNews');

Route::get('/about/Careers', function () {
    return view('website.about.careers');
})->name('about.careers');

Route::get('/about/ContactUs', function () {
    return view('website.about.contactUs');
})->name('about.contactUs');
