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

// 	//================== First Medhot Testing =================
// 	    // return view('welcome', [
// 	    // 	'name'		=> 'world',
// 	    // ]);

// 	// return view( 'welcome' )->with( 'name', 'World' );

// 	// $name = 'World';
// 	// $age = '31';
//  	//return view( 'welcome', compact('name', 'age') );

// 	$name = 'World';
// 	$tasks = [
//     		'Do task one',
//     		'do task two',
//     		'do task three'
//     	];
//     	return view( 'welcome', compact('name', 'tasks') );
// });


use App\Task;


Route::get( '/', function() {
	$name = 'World';
	$tasks = DB::table( 'tasks' )->get();

	return view( 'welcome', compact( 'tasks', 'name' ) );
});


Route::get( '/tasks', function() {

	//$tasks = DB::table( 'tasks' )->get();
	// $tasks = App\Task::all();
	$tasks = Task::all();

	return view( 'tasks.index', compact( 'tasks' ) );
});

Route::get( '/tasks/{task}', function( $id ) {

	// $task = DB::table( 'tasks' )->find( $id );
	// $task = App\Task::find($id);
	$task = Task::find($id);

	$name = 'World';
	return view( 'tasks.show', compact( 'task', 'name' ) );
});






Route::get( '/about', function() {
	return view( 'about' );
});