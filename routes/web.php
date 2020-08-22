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
//Listing choice routes 
Route::get('/listingChoice','ListingChoiceController@index')->name('listing_choice');
//listing catalogues
Route::get('/housingListing','housingListingController@index')->name('housing');
Route::get('/archiListing','archiListingController@index')->name('archi');
Route::get('/companyListing','companyListingController@index')->name('company');
Route::get('/blogListing','blogingListingController@index')->name('blogs');
//listing details
Route::get('/housingDetails','housingListingController@housingDetails')->name('housing_details');
Route::get('/archiDetails','archiListingController@archiDetails')->name('archi_details');
Route::get('/companyDetails','companyListingController@companyDetails')->name('company_details');
Route::get('/blogDetails','blogingListingController@blogDetails')->name('blog_details');
//auth routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
