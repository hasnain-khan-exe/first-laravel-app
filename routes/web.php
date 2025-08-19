<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('home');
});

//index
Route::get('/jobs', function ()  {
    // $jobs= job::with('employer')->get();
    // $jobs= job::with('employer')->simplePaginate(5);
    $jobs= job::with('employer')->latest()->paginate(10);
    return view('jobs.index', ['jobs' => $jobs] );
})->name('jobs.index');

//create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//show
Route::get('/jobs/{id}', function ($id) {
    $job= Job::find($id);
    return view('jobs.show', ['job'=>$job]);
})->name('jobs.show');

//store
Route::post('/jobs-store', function () {

    request()->validate([
        'title' => ['required','min:3'],
        'salary' => ['required'],
        'industry' => ['required']
    ]);

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

//Edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job= Job::find($id);
    return view('jobs.edit', ['job'=>$job]);
})->name('jobs.edit');

//update
Route::patch('/jobs/{id}', function ($id) {
    
    request()->validate([
        'title' => ['required','min:3'],
        'salary' => ['required'],
        'industry' => ['required']
    ]);

    //authorize (On hold....)

    $job= Job::findOrFail($id);

    // $job->title = request('title');
    // $job->salary = request('salary');
    // $job->industry = request('industry');
    // $job->save();
    
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
        'industry' => request('industry'),
    ]);

    return redirect()->route('jobs.show', $job->id)->with('success', 'Job updated successfully!');
})->name('jobs.update');

//Destroy
Route::delete('/jobs/{id}', function ($id) {
     //authorize (On hold....)

    //  $job= Job::findOrFail($id);
    //  $job->delete();

    Job::findOrFail($id)->delete();

    return redirect('/jobs')->with('success', 'Job deleted successfully!');
});

Route::get("user/{id}/posts", function ($id) {
    
    $user= User::with('posts')->find($id);
    // $posts = Post::where("user_id", $id)->get()->toArray();

    // dd($user);
});