<?php
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => \App\Models\Task::latest()->get(),
    ]); 
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
    
    return view('show', [
        'task' => \App\Models\Task::findOrFail($id),
    ]);
})->name('tasks.show');

Route::get('/laravel', function () {
    return view('welcome');  // resources/views/welcome.blade.php
});

Route::get('/hello', function () {
    return 'Hello World';
})->name('hello');

Route::get('/halo', function () {
    return redirect()->route('hello');
});

Route::get('/user/{id}', function ($id) {
    return 'User: '.$id;
});
