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


/*Route Project */
Route::resource('/','ProjectController');
Route::get('/user/{id}', 'ProjectController@landding');
Route::get('/logout', 'ProjectController@logout');
Route::get('/project/index', 'ProjectController@index');
Route::post('/create_project', 'ProjectController@store');
Route::get('bom/{id}', 'ProjectController@show');
Route::put('/project/{id}', 'ProjectController@update');
Route::put('/project/{id}/confirm', 'ProjectController@confirm');
Route::delete('/project/{id}', 'ProjectController@destroy');

/*Route BOM */
Route::get('autocomplete', 'AutoCompleteController@search');
Route::post('/create_bom', 'BomController@store');
Route::get('/bomdetail/{id}', 'BomController@show');
Route::put('/bom/{id}/', 'BomController@update');
Route::put('/bom/{id}/confirm', 'BomController@confirm');
Route::delete('/bom/{id}', 'BomController@destroy');

/*Route BOM_Detail */
Route::resource('/bomdetail','BomDetailController');
Route::get('/bomtail', 'BomDetailController@index');
Route::post('/create_bomdetail', 'BomDetailController@store');
Route::post('/create_bomdetail_new', 'BomDetailController@storeNew');
Route::put('/bomdetail/{id}', 'BomDetailController@update');
Route::put('/bomdetail_remark/{id}', 'BomDetailController@remark');
Route::delete('/bomdetail/{id}', 'BomDetailController@destroy');


/*Route BOM */
Route::resource('/part','PartController');
Route::get('/part', 'PartController@index');
Route::post('/create_part', 'PartController@store');
Route::put('/part/{id}', 'PartController@update');
Route::delete('/part/{id}', 'PartController@destroy');

Route::get('/part_api/{Position}','API\PartController@supplier');
Route::get('/part_api/{supplier}/part_no','API\PartController@part_no');
Route::get('/part_api/{part_no}/descriptions','PartController@descriptions');
Route::get('/part_api/{part_no}/price','PartController@price');
Route::get('/part_api/{part_no}/part_id','PartController@part_id');


//report    

Route::get('/reportbom/{id}/pdf', 'ReportController@Bom_PDF');
Route::get('/reportbomdetail/{id}/pdf', 'ReportController@BomDetail_PDF');

Route::get('reportbom/{id}/excel', 'ReportController@Bom_EXCEL');
Route::get('reportbomdetail/{id}/excel', 'ReportController@BomDetail_EXCEL');


//Route::get('/{id}', 'UsersController@userProject');

//Route::get('/part','API\PartController@supplier');

/*
Route::resource('/sick','SickController');
Route::get('/sick', 'SickController@index');
Route::get('/sick/create', 'SickController@create');
Route::post('/sick', 'SickController@store');
Route::get('/sick/{id}', 'SickController@show');
Route::get('/sick/{id}/edit', 'SickController@edit');
Route::put('/sick/{id}', 'SickController@update');
Route::delete('/sick/{id}', 'SickController@destroy');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
