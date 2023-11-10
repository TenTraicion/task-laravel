<?php
// use Illuminate\Http\Response;
use App\Models\Task;
use Illuminate\Http\Request;
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
        'tasks' => Task::latest()->get(),
    ]); 
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{id}', function ($id) {
    
    return view('show', [
        'task' => Task::findOrFail($id),
    ]);
})->name('tasks.show');

Route::post('/tasks', function (Request $request) {
    // dd($request->all());
    $data = $request->validate([
        'title' => 'required|max:255',
        'desc' => 'required',
        'ldesc' => 'required',
    ]);
    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['desc'];
    $task->long_description = $data['ldesc'];
    
    $task->save();

    return redirect()->route('tasks.show', ['id'=> $task->id])->with('success','Data Added Successfully!');
})->name('tasks.store');

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
