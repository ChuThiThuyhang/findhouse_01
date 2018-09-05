<?php

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

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/', 'userController@home');

//register
   Route::get('register/verify/{code}', 'RegisterController@verify');
//
Route::get('/register', 'RegisterController@register');
Route::post('/register', 'RegisterController@postRegister');
Route::get('/logout', 'LoginController@logout');
Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postLogin');
Route::get('/location', 'userController@location');
Route::get('/location/{idpro}/{id}', 'userController@local');
Route::get('/local/{id}', 'userController@loadLocal');
Route::get('/detailLocation/{id}', 'userController@detail');
Route::get('/tourGuide', 'userController@tourGui');
Route::get('/search/', 'userController@search');
Route::get('/bookTour/{id}', 'BookingController@pageBook');

Route::get('/test', 'AdminController@getUpload');
Route::post('/test', 'AdminController@postUpload');
Route::post('/showListKH', 'BookingController@showListGuest');
Route::post('/order', 'BookingController@create');
Route::patch('/confirmBook/{id}','BookingController@confirm');

Route::get('/search/name', 'SearchController@searchByName');
Route::get('/searchPrice/{id}', 'SearchController@searchByPrice');
Route::get('/searchProvince/{id}','SearchController@searchByNameProvince');
Route::get('/searchType/{id}', 'SearchController@searchByType');
Route::get('/searchLocation', 'SearchController@searchLocal');

Route::get('/getType', 'SearchController@getType');

Route::get('/myAccount/{id}', 'userController@viewAccount');
Route::post('/editInfoUser/{id}', 'userController@editInfo');
Route::get('/showDetailBook', 'BookingController@showDetailBook');

Route::get('/tourDetail/{id}', 'TourLocalController@detail');

Route::get('facebook', function () {
    return view('facebook');
});
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');
    
Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function()
{
    Route::get('/', 'HomeController@index');
    Route::get('/user', 'UserController@index');
    Route::get('/tour', 'TourController@show');
    Route::get('/lotour', 'TourController@show1');
    Route::get('/rate', 'RateController@showRate');

    Route::get('/location', 'LocationController@showLocation');
    Route::get('/editLocal/{id}', 'LocationController@editLocal');
    Route::post('/editLocation/{id}','LocationController@editLocation');
    Route::get('/delLocation/{id}','LocationController@delLocation');

    Route::get('/plan', 'PlanController@showPlan');

    Route::get('/showprovince', 'ProvinceController@showProvines');
    Route::get('/province', 'ProvinceController@showProvine');
    Route::post('/province', 'ProvinceController@addProvine');
    Route::get('/delProvince/{id}', 'ProvinceController@delProvine');

    Route::get('/addRate', 'RateController@rate');
    Route::post('/addRate', 'RateController@addRate');
    Route::get('/deleteRate/{id}', 'RateController@delRate');

    Route::get('/addTour', 'TourController@tour');
    Route::post('/addTour', 'TourController@addTour');
    Route::get('/editTour/{id}', 'TourController@edit');
    Route::post('/editTour/{id}', 'TourController@editTour');
    Route::get('/addLocation', 'LocationController@location');
    Route::post('/addLocation', 'LocationController@addLocation');

    Route::get('/createLoTour', 'TourController@creLoTour');
    Route::post('/createLoTour', 'TourController@save');

   
});
