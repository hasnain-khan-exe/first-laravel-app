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
    // $jobs= job::with('employer')->simplePaginate(5);
    $jobs= job::with('employer')->latest()->paginate(10);
    return view('jobs.index', ['jobs' => $jobs] );
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job= Job::find($id);
    return view('jobs.show', ['job'=>$job]);
});

Route::post('/jobs-store', function () {

    //Valiations

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'industry' => request('industry'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
})->name('jobs.store');

Route::get('/contact', function () {
    return view('contact');
});



Route::get("user/{id}/posts", function ($id) {
    
    $user= User::with('posts')->find($id);
    // $posts = Post::where("user_id", $id)->get()->toArray();

    // dd($user);
});