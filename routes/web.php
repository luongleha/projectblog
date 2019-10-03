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
//     return view('welcome');
// });
// Route::get('/a', function () {
//     // return view('ha', 
//     // [
//     // 	'name' => 'Luong Le Ha',
//     // 	'age' => '21' ]);
//     return view('ha') -> with(['name' => 'Luong Le Ha', 'age' => '21']);
// });
// Route::get('user/{id}', function($id) {
//     return 'User ' . $id;
// });
// Route::get('/user/{id}/post/{post}', function($id, $idPost) {
//     return "This is post $idPost of user $id"; 
// });
// Route::get('/admin/setting', function() {
//     return view('admin.setting');
// });
// Route::get('/child', function () {
//     return view('child');
// });
// Route::get('/todo', function () {
// 	$list=['hoc lap trinh', 'hoc moi', 'hoc css'];
//     return view('todo.todo')->with('list',$list);
// });
// Route::get('/add', function () {
//     return view('add');
// })->name('todo.add');
// // Route::get('/', 'HomeController@index');
// Route::get('/add', function () {
//     Route::get('/', 'HomeController@index');
//     Route::get('/page/{page?}', 'HomeController@page');
// });

// // Admin
// Route::get('/add', function () {
//     Route::get('/', 'HomeController@index');
//     Route::get('/page/{page?}', 'HomeController@page');
// });

// // // admin
// // Route::get('/admin/setting', 'Admin\SettingController@index');
// // Route::get('/admin/show/{id}', 'Admin\SettingController@show');
// // Route::get('/admin/user', 'Admin\UserController@index');


// // Route::prefix('admin')->namespace('Admin')->group(function(){
// //     Route::get('setting', 'SettingController@index');
// //     Route::get('show/{id}', 'SettingController@show');
// //     Route::get('user', 'UserController@index');

// // });


// Route::group([
//     'prefix' => 'admin',
//     'namespace' => 'Admin',
// ], function(){
//     Route::get('setting', 'SettingController@index');
//     Route::get('show/{id}', 'SettingController@show');
//     Route::get('user', 'UserController@index');
// });

Route::resource('todos', 'TodoController');

Route::resource('users', 'UserController');
