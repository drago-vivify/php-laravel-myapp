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
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->middleware('guest');

// Route::get('/test-database', function() {
//     $users = DB::table('users')->get();
//     DB::insert('insert into users (email, password, first_name, last_name, company, country) values ( ?, ?, ?, ?, ?, ?)', 
//         ['test@test.test', 'test', 'Test', 'Test', 'TestComp', 'Testlands']);
//     DB::table('users')->where('first_name', 'asd')->delete();
//     return $users;
// });
