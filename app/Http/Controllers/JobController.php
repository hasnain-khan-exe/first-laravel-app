<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

   

    public function index()
    {
        // $jobs= job::with('employer')->get();
        // $jobs= job::with('employer')->simplePaginate(5);
        $jobs = Job::with('employer')->latest()->paginate(10);
        return view('jobs.index', ['jobs' => $jobs]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        // $job= Job::find($id);
        return view('jobs.show', ['job' => $job]);
    }
    public function store(Request $request)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
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
    }
    public function edit(Job $job)
    {
        // $job= Job::find($id);
        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'industry' => ['required']
        ]);

        //authorize (On hold....)

        // $job= Job::findOrFail($id); doesnt need after update uri by changing $id wildcard to $job pass the instance of Job Model to function

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
    }
    public function destroy(Job $job) {
            //authorize (On hold....)
    
    //  $job= Job::findOrFail($id);
    //  $job->delete();
    
    // Job::findOrFail($id)->delete();
    $job->delete();
    
    return redirect('/jobs')->with('success', 'Job deleted successfully!');
        
    }
}
