<?php



// Route::get('/tasks', 'TasksController@index');

// Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostController@index');


Route::get('/posts/{post}', 'PostController@show');


Route::get('/posts/create', 'PostController@create');




// Route::get('/', function () {

// 	$tasks =  DB::table('tasks')->latest()->get();


//     return view('welcome',compact('tasks'));
// });

// Route::get('/tasks', function () {

// 	$tasks =  DB::table('tasks')->latest()->get();


//     return view('taskslist',compact('tasks'));
// });

//Eloquent ver
// Route::get('/tasks', function () {


// 	$tasks = Task::all();


//     return view('taskslist',compact('tasks'));
// });


// Route::get('/task/{task}', function ($id) {

// 	$task =  DB::table('tasks')->find($id);


//     return view('showonetask',compact('task'));
// });

//Eloquent ver
// Route::get('/task/{task}', function ($id) {

// 	$task =  Task::find($id);

//     return view('showonetask',compact('task'));
// });
