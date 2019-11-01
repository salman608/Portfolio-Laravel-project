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

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/','FrontendController@index');

Auth::routes();



// Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){
//    Route::get('dashboard','DashboardController@index')->name('dashboard');
//
// });




  Route::get('/admin','AdminController@index')->name('admin');
  Route::resource('/skill','Admin\SkillController');
  Route::resource('/about','Admin\AboutController');
  Route::resource('/expertise','Admin\ExpertiseController');
  Route::resource('/myskill','Admin\MyskillController');
  Route::resource('/education','Admin\EducationController');
  Route::resource('/experience','Admin\ExperienceController');
  Route::resource('/myself','Admin\myselfController');
  Route::resource('/profile','Admin\ProfileController');


Route::get('/home', 'HomeController@index')->name('home');
