<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uploadchoice', 'UploadChoiceController@index')->name('uploadchoice');
Route::get('/welcome', 'LandingController@index')->name('welcome');
// Route::get('/formupload', 'FormController@uploadingForm')->name('upload_form'); //form for houses upload 
// Route::get('/formArchi', 'FormController@formArchi')->name('upload_archi'); //form for architecture upload 
// Route::get('/formCompany', 'FormController@formCompany')->name('upload_company'); //form for company upload 
// Route::get('/formBlog', 'FormController@formBlog')->name('upload_blog'); //form for architecture upload


 

//defining routes for form uploads 
//houses 
Route::get('/formupload','HousesController@create')->name('upload_form'); //form houses get request 
Route::post('/formupload','HousesController@store')->name('form_upload');
//architecture 
Route::get('/formArchi','ArchitectureController@create')->name('upload_archi'); //form archi get request 
Route::post('/formArchi','ArchitectureController@store')->name('archi_upload');
//companies 
Route::get('/formCompany','CompanyController@create')->name('upload_company'); //form company get request 
Route::post('/formCompany','CompanyController@store')->name('company_upload');

//blog
Route::get('/formBlog','BlogController@create')->name('upload_blog'); //form blog get request 
Route::post('/formBlog','BlogController@store')->name('blog_upload');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
