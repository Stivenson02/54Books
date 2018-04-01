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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//VISTA
Route::get('/', function () {
    return view('welcome');
});
Route::get('/404', function () {
    return view('error.404');
});
Route::get('/type', function () {
    return view('subtype');
});
//Logica
Route::get('/home', 'HomeController@index');
Route::get('type_books/{id}', [
  'uses' => 'BooksController@Subtype',
  'as' => 'type_books_phat'
]);
Route::get('detail_book/{id}', [
  'uses' => 'BooksController@Detail',
  'as' => 'detail_book_phat'
]);
Route::get('imagen_book/{id}', [
  'uses' => 'BooksController@imageBook',
  'as' => 'imagen_book_phat'
]);
Route::post('filter_subtipe', [
  'uses' => 'BooksController@filterSubtipe',
  'as' => 'filter_subtipe_phat'
]);
//compra
Route::post('isert_car', [
  'uses' => 'FeatureController@insertCar',
  'as' => 'isert_car_phat'
]);
Route::post('send_payu', [
  'uses' => 'FeatureController@SendPayU',
  'as' => 'send_payu_phat'
]);
Route::get('show_car', [
  'uses' => 'FeatureController@showCar',
  'as' => 'show_car_phat'
]);
Route::get('delete_car/{id}', [
  'uses' => 'FeatureController@deleteCar',
  'as' => 'delete_car_phat'
]);
Route::get('send_pay/{id}', [
  'uses' => 'FeatureController@sendPay',
  'as' => 'send_pay_paht'
]);
//Usuario
Route::get('my_perfil', [
  'uses' => 'UserController@show',
  'as' => 'my_perfil_phat'
]);
Route::post('edit_user', [
  'uses' => 'UserController@edituser',
  'as' => 'edit_user_phat'
]);
Route::get('date_send', [
  'uses' => 'UserController@showSend',
  'as' => 'date_send_phat'
]);
Route::post('edit_send', [
  'uses' => 'UserController@editSend',
  'as' => 'edit_send_phat'
]);
//PLANS
Route::get('plan_free', [
  'uses' => 'UserController@showfree',
  'as' => 'plan_free_phat'
]);
Route::get('plan_day', [
  'uses' => 'UserController@showplan',
  'as' => 'plan_day_phat'
]);
Route::get('plans', [
  'uses' => 'UserController@plans',
  'as' => 'plans_phat'
]);
Route::get('pay_plan/{id}', [
  'uses' => 'UserController@payPlan',
  'as' => 'pay_plan_phat'
]);
//perfil Libros
Route::get('book_feature', [
  'uses' => 'UserController@featureBook',
  'as' => 'book_feature_phat'
]);
//PAYU SIMULATE
Route::post('simulate_plan_payu', [
  'uses' => 'UserController@SimulatePayPlan',
  'as' => 'simulate_plan_payu_phat'
]);
Route::post('simulate_book_payu', [
  'uses' => 'FeatureController@SimulatePayBook',
  'as' => 'simulate_book_payu_phat'
]);
