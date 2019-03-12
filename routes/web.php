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

Route::get('/', function () {
    return view('welcome');
});

route::get('/emp/index/','storeEmpController@index');
route::post('/store/emp','storeEmpController@store');
route::get('/view/emp/{id}','storeEmpController@view');
route::get('/editemp/{id}','storeEmpController@edite');
route::post('/result/edite/{id}','storeEmpController@resultedite');
route::get('/deletemp/{id}','storeEmpController@delete');

route::get('/task/index/','storeTaskController@index');
route::post('/store/task','storeTaskController@store');
route::get('/view/task/{id}','storeTaskController@view');

route::get('/assign/index/','assignController@index');
route::post('/ass/','assignController@store');
route::get('/view/ass/{id}','assignController@view');

route::post('/search/task','sourchController@searchtask');
route::get('/sourch/emp/','sourchController@indexemp');

route::post('/search/emp','sourchController@searchemp');
route::get('/search/task/','sourchController@indextask');
