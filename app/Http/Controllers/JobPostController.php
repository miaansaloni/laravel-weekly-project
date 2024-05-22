<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JobPostController extends Controller
{
    public function index(Request $request)
    {
        $jobposts = JobPost::all(); 
        $jobposts = JobPost::select()->paginate(5); 

        return view('jobposts.index', compact('jobposts')); 
    }
    public function show($id)
    {
        $jobpost = JobPost::findOrFail($id);
       
        return view('jobposts.show', [
            'jobpost' => $jobpost
        ]);
    }

    public function create(Request $request)
    {
        return view('jobposts.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $newjobpost = new JobPost();
        $newjobpost->title = $data['title'];
        $newjobpost->description = $data['description'];
        $newjobpost->img = $data['img'];
        $newjobpost->experience = $data['experience'];
        $newjobpost->location = $data['location'];
        $newjobpost->requirements = $data['requirements'];
        $newjobpost->category = $data['category'];
        $newjobpost->salary = $data['salary'];
        $newjobpost->field = $data['field'];

        $newjobpost->user_id = $request->user()->id;
        $newjobpost->save();

        return redirect()->route('jobposts.show', ['id' => $newjobpost->id])->with('creation_success', $newjobpost);
    }

    public function edit($id)
    {
        $jobpost = JobPost::findOrFail($id);
        if (Auth::user()->id !== $jobpost->user_id) {
            return redirect()->route('jobposts.index')->with('no_permission', $jobpost);
        }

        return view('jobposts.edit', compact('jobpost'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $jobpost = JobPost::findOrFail($id);

        if ($request->user()->id !== $jobpost->user_id) abort(401);

        $jobpost->title = $data['title'];
        $jobpost->description = $data['description'];
        $jobpost->img = $data['img'];
        $jobpost->experience = $data['experience'];
        $jobpost->location = $data['location'];
        $jobpost->requirements = $data['requirements'];
        $jobpost->category = $data['category'];
        $jobpost->salary = $data['salary'];
        $jobpost->field = $data['field'];
        $jobpost->update();

        return redirect()->route('jobposts.index')->with('update_success', $jobpost);
    }

    public function destroy(Request $request, $id)
    {
        $jobpost = JobPost::findOrFail($id);
        if (Auth::user()->id !== $jobpost->user_id) abort(401);
        $jobpost->delete();

        return redirect()->route('jobposts.index')->with('operation_success', $jobpost);
    }

    public function list()
    {
        $jobposts = JobPost::all();
        return response()->json([
            'success' => true,
            'data'  => $jobposts
        ]);
    }
}
