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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
});
//

Route::get('/signup', 'FimsDashboardController@signup');
Route::get('/dashboard', 'FimsDashboardController@dashboard');
Route::get('/employees', 'EmployeesController@index');
Route::get('/compareEmployeeID', 'EmployeesController@compareID');
Route::post('/addemployee', 'EmployeesController@store');
Route::any('/updateEmployee', 'EmployeesController@update');
Route::get('/users', 'UsersController@index');
Route::any('/updateuser', 'UsersController@update');
Route::get('/positions', 'PositionsController@index');
Route::post('/addposition', 'PositionsController@store');
Route::any('/updateposition', 'PositionsController@update');
Route::get('/divisions', 'DivisionsController@index');
Route::post('/adddivision', 'DivisionsController@store');
Route::any('/updatedivision', 'DivisionsController@update');
Route::get('/particulars', 'ParticularsController@index');
Route::post('/addparticular', 'ParticularsController@store');
Route::any('/updateparticular', 'ParticularsController@update');



Auth::routes();
Route::get('/index', 'FimsDashboardController@index')->middleware('auth');
/*Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});*/
