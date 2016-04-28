<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



// Using A Route Closure...

// Route::get('profile', ['middleware' => 'auth', function() {
//     // Only authenticated users may enter...

//     Route::get('/dashboard', function () {
//     return view('pages/home');
//    });



// Route::get('/', function () {
    
//     return view('pages/home');
// });
// Route::get('/will_pdf_preview', function () {
//     return view('will_pdf_preview');
// });

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/signup', function () {
//     return view('signup');
// });
// Route::get('/404-page', function () {
//     return view('404-page');
// });
// Route::get('/home', function () {
//     return view('pages/home');
// });
// Route::get('/profile', function () {
//     return view('pages/profile');
// });
// Route::get('/typography', function () {
//     return view('pages/typography');
// });
// Route::get('/grid', function () {
//     return view('pages/grid');
// });
// Route::get('/table', function () {
//     return view('pages/table');
// });
// Route::get('/form-elements', function () {
//     return view('pages/forms/form-elements');
// });
// Route::get('/form-components', function () {
//     return view('pages/forms/form-components');
// });

// Route::get('/button', function () {
//     return view('pages/ui-element/button');
// });
// Route::get('/dropdown', function () {
//     return view('pages/ui-element/dropdown');
// });
// Route::get('/icons', function () {
//     return view('pages/ui-element/icon');
// });
// Route::get('/panels', function () {
//     return view('pages/ui-element/panel');
// });
// Route::get('/alerts', function () {
//     return view('pages/ui-element/alert');
// });
// Route::get('/progressbars', function () {
//     return view('pages/ui-element/progressbar');
// });
// Route::get('/pagination', function () {
//     return view('pages/ui-element/pagination');
// });
// Route::get('/other-elements', function () {
//     return view('pages/ui-element/other');
// });

// Route::get('/chartjs', function () {
//     return view('pages/charts/chartjs');
// });
// Route::get('/c3chart', function () {
//     return view('pages/charts/c3chart');
// });
// Route::get('/calendar', function () {
//     return view('pages/calendar');
// });
// Route::get('/inbox', function () {
//     return view('pages/mail/inbox');
// });
// Route::get('/compose', function () {
//     return view('pages/mail/compose');
// });
// Route::get('/invoice', function () {
//     return view('pages/invoice');
// });
// Route::get('/docs', function () {
//     return view('pages/docs');
// });
// Route::get('/blank', function () {
//     return view('pages/blank');
// });

// Route::get('api/change-theme', function() {
//     \Session::set('theme', \Input::get('theme'));
// });
// Route::get('api/lang', function() {
//     \Session::set('lang', \Input::get('lang'));
// });
// Route::get('api/set-rtl', function() {
//     \Session::set('rtl', \Input::get('rtl'));
// });

//}]);

// Using A Controller...

// Route::get('profile', [
//     'middleware' => 'auth',
//     'uses' => 'ProfileController@show'
// ]);


Route::group(array('before' => 'auth'), function(){

   




}); 



Route::get('dashboard', 'DashboardController@index');

Route::get('filemanager', 'FileManagerController@index');


//Route::get('/', 'DashboardController@index');

Route::get('/', 'WillController@index');

Route::get('/will_apply_pdf', 'WillController@will_apply_pdf');


Route::get('/will_apply', 'WillController@index');

Route::post('/will_apply', 'WillController@index');

Route::post('/will_apply_pdf', 'WillController@will_apply_pdf');

Route::get('/will_apply_pdf', 'WillController@will_apply_pdf');

Route::get('/create_stage1', 'WillController@create_stage1');

Route::post('/create_stage1', 'WillController@create_stage1');

Route::get('/create_stage2', 'WillController@create_stage2');

Route::post('/create_stage2', 'WillController@create_stage2');

Route::post('/create_stage3','WillController@create_stage3');

Route::get('/create_stage3','WillController@create_stage3');



// Route::controllers([
//     'auth' => 'Auth\AuthController',
//     'password' => 'Auth\PasswordController',
// ]);

//Route::controller('/', 'Auth\AuthController');

Route::get('/login', function () {
    Session::set('lang', 'en');
    return view('auth.login');
});

Route::get('/register', function () {
    Session::set('lang', 'en');
    return view('auth.register');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');