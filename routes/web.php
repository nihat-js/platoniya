<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return view('welcome'); // Create a welcome view if needed
});

Route::get('/account', function () {
    return view('account'); // Create a welcome view if needed
});

Route::get('/account', function () {
    return view('home'); // Create a welcome view if needed
});

Route::get('/dashboard', function () {
    return view('dashboard',[
        "totalTasks" => 0,
        "totalProjects" => 0,
        "totalTeams" => 0,
        "recentTasks" => [],

    ]); // Create a welcome view if needed
});


// Authentication Routes
// Auth::routes(); // Automatically includes login, logout, registration routes

// Task Routes
Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController ::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('teams', TeamController::class);
    Route::get('settings', [SettingsController::class, 'index'])->name('settings');
});




Route::get('/privacy', function () {
    return view('privacy'); 
})->name('privacy');

Route::get('/terms', function () {
    return view('terms'); 
})->name('terms');



// Route::get("/",function(){
//     return view("welcome");
// });

// Route::get("/dashboard",function(){
//     return view("dashboard");
// });

// Route::get("/account",function (){
//     return view("account");
// });

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// Route::get("project/:projectId/tasks/:taskId/comments",function(){
//     // Task
// });


// Route::post("/task",function(){
//     Task::all();
// });

// Route::get("tasks",function(){
// });




// require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
