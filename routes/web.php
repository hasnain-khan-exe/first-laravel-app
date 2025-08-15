<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function ()  {
    // $jobs= job::with('employer')->get();
    $jobs= job::with('employer')->paginate(3);
    return view('jobs', ['jobs' => $jobs] );
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    $job= Job::find($id);
    return view('job', ['job'=>$job]);
});


Route::get("user/{id}/posts", function ($id) {
    
    $user= User::with('posts')->find($id);
    // $posts = Post::where("user_id", $id)->get()->toArray();

    // dd($user);
});