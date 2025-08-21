<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

// Route::get('/', function () {
//     return view('home');
// });

//shorthandd of above root
Route::view('/', 'home');
Route::view('/contact', 'contact');
//woking same as below
Route::resource('jobs', JobController::class); // we can pass an array like this ['except' => ['create']] or ['only' => ['index']]

// Route::controller(JobController::class)->group(function(){
//         Route::get('/jobs', 'index')->name('jobs.index');
//         Route::get('/jobs/create', 'create');
//         Route::get('/jobs/{job}', 'show')->name('jobs.show');
//         Route::post('/jobs-store', 'store')->name('jobs.store');
//         Route::get('/jobs/{job}/edit', 'edit')->name('jobs.edit');
//         Route::patch('/jobs/{job}', 'update')->name('jobs.update');
//         Route::delete('/jobs/{job}', 'destroy')->name('jobs.destroy');
// });

Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy'])->name('logout');

Route::get("user/{id}/posts", function ($id) {
    $user= User::with('posts')->find($id);
    // $posts = Post::where("user_id", $id)->get()->toArray();
    // dd($user);
});