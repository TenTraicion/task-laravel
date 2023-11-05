<?php

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

class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new Task(
    1,
    'Buy groceries',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-03-01 12:00:00',
    '2023-03-01 12:00:00'
  ),
  new Task(
    2,
    'Sell old stuff',
    'Task 2 description',
    null,
    false,
    '2023-03-02 12:00:00',
    '2023-03-02 12:00:00'
  ),
  new Task(
    3,
    'Learn programming',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2023-03-03 12:00:00',
    '2023-03-03 12:00:00'
  ),
  new Task(
    4,
    'Take dogs for a walk',
    'Task 4 description',
    null,
    false,
    '2023-03-04 12:00:00',
    '2023-03-04 12:00:00'
  ),
];

Route::get('/', function () use ($tasks) {
    return view('index', [
        'tasks' => $tasks,
    ]); 
})->name('tasks.index');

Route::get('/{id}', function ($id) {
    return 'One single task';
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

Route::get('/401', function () {
    return view('401');  // resources/views/
});

Route::get('/402', function () {
    return view('402');  // resources/views/
});

Route::get('/403', function () {
    return view('403');  // resources/views/
});

Route::get('/404', function () {
    return view('404');  // resources/views/
});

Route::get('/419', function () {
    return view('419');  // resources/views/
});

Route::get('/429', function () {
    return view('429');  // resources/views/
});

Route::get('/500', function () {
    return view('500');  // resources/views/
});

Route::get('/503', function () {
    return view('503');  // resources/views/
});

Route::get('/layout', function () {
    return view('layout');  // resources/views/
});

Route::get('/minimal', function () {
    return view('minimal');  // resources/views/
});