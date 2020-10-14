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
    Route::post('registeruser', 'Auth\RegisterController@store')->name('registeruser');
    Route::get('/teacher/certificates', 'CertificateController@certificates')->name('certificate');
    Route::post('/savecertificate', 'CertificateController@savecertificate')->name('savecertificate');
    Route::post('/savecourse', 'CertificateController@savecourse')->name('savecourse');
    Route::post('/updatecourse', 'CertificateController@updatecourse')->name('updatecourse');
    Route::get('/teacher/course', 'CertificateController@course')->name('course');
    Route::post('/getcourse', 'CertificateController@getcourse')->name('getcourse');
    Route::get('/home', 'CertificateController@index')->name('home');
    //Teacher Controller
    Route::get('/teacher/teachers', 'TeacherController@teachers')->name('teachers');
    Route::post('/saveteacher', 'TeacherController@saveteacher')->name('saveteacher');

    Route::get('/contacts/delete/{id}', 'ContactController@delete')->name('contacts.delete');
});
Route::middleware('auth')->group(function () {
    Route::post('/showcity', 'ContactController@showcity')->name('showcity');
    Route::post('/entitymail', 'ContactController@entitymail')->name('entitymail');
    Route::get('/home', 'ContactController@contacts')->name('contacts');
    Route::get('/contacts/edit/{id}', 'ContactController@edit')->name('contacts.edit');
    Route::post('/contacts/update/{id}', 'ContactController@update')->name('contacts.update');
    Route::post('/sendmail', 'ContactController@sendmail')->name('sendmail');
    Route::post('/updatecontactstatus', 'ContactController@updatecontactstatus')->name('updatecontactstatus');

    //products

  Route::group(['middleware' => 'user'],function(){
    Route::get('/product/request/e-edport-virtual-classroom-solution', 'products\VirtualClassroomController@show')->name('products.virtual-classroom-solution');
    

    Route::get('product/request/e-edport-student-self-learning-solution', 'products\StudentSelfLearningController@show')->name('products.student-selflearning-solution');

    Route::get('product/request/e-edport-parental-control-app', 'products\ParentalControlController@show')->name('products.parental-control-app');

    //services

    Route::get('service/request/e-edport-smart-teacher-training', 'services\TrainaingController@show')->name('services.teacher-training-show');

    Route::get('service/request/e-edport-smart-teacher-certification', 'services\CertificateController@show')->name('services.teacher-certificate-show');
});

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
Route::get('/products/e-edport-virtual-classroom-solution', function () {
    return view('website.products.VirtualClassroom');
})->name('products.classroomsolution');

Route::get('/products/e-edport-student-self-learning-solution', function () {
    return view('website.products.StudentSelf-Learning');
})->name('products.studentselflLearning');

Route::get('/products/e-edport-parental-control-app', function () {
    return view('website.products.ParentalControl');
})->name('products.parentalcontrol');

Route::get('get-in-touch/e-edport-virtual-classroom-Solution', 'products\VirtualClassroomController@index')->name('products.virtual-classroom-form');

Route::get('get-in-touch/e-edport-student-self-learning-solution', 'products\StudentSelfLearningController@index')->name('products.self-learning-form');

Route::get('get-in-touch/e-edport-parental-control-app', 'products\ParentalControlController@index')->name('products.parental-control-form');


// Services
Route::get('/services/e-edport-smart-teacher-training', function () {
    return view('website.services.teacher-trainaing.TeacherTraining');
})->name('services.teachertraining');

Route::get('/services/e-edport-smart-teacher-certification', function () {
    return view('website.services.teacher-certification.TeacherCertification');
})->name('services.teachercertification');

Route::get('/services/e-edport-student-career-counselling', function () {
    return view('website.services.careerCounselling.CareerCounselling');
})->name('services.careercounselling');

Route::get('services/e-edport-smart-teacher-training-form', 'services\TrainaingController@index')->name('services.teacher-training-form');
Route::get('services/e-edport-career-counselling-form', 'services\CounsellingController@index')->name('services.careecounselling-form');
Route::get('services/e-edport-smart-teacher-certification-form', 'services\CertificateController@index')->name('services.teacher-certification-form');
Route::get('services/e-edport-career-counselling-show', 'services\CounsellingController@show')->name('services.careecounselling-show');
Route::get('services/e-edport-smart-teacher-certification-show', 'services\CertificateController@show')->name('services.teacher-certification-show');
//Route::resource('teachertraining', "services\TrainaingController");


// Resources
Route::get('/resources/brochure', function () {
    return view('website.resources.brochure');
})->name('resources.brochure');

Route::get('/resources/events', function () {
    return view('website.resources.events');
})->name('resources.events');

Route::get('/resources/fAQ’s', function () {
    return view('website.resources.faqs');
})->name('resources.faqs');


// About 
Route::get('/about/company-overview', function () {
    return view('website.about.companyOverview');
})->name('about.companyoverview');

Route::get('/about/leadership-team', function () {
    return view('website.about.leadershipteam');
})->name('about.leadershipteam');

Route::get('/about/latest-news', function () {
    return view('website.about.latestnews');
})->name('about.latestnews');

Route::get('/about/careers', function () {
    return view('website.about.careers');
})->name('about.careers');
Route::get('/about-us', function () {
    return view('website.about.about');
})->name('about');

Route::get('/contactus', function () {
    return view('website.about.ContactUs');
})->name('about.contactus');
