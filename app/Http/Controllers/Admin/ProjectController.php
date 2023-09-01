<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(15); 
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $data = $request->all();
        // $newProject = new Project();
        // $newProject->title = $data['title'];
        // $newProject->description = $data['description'];
        // $newProject->group_name = $data['group_name'];
        // $newProject->started_at = $data['started_at'];
        // $newProject->finished_at = $data['finished_at'];
        // $newProject->final_score = $data['final_score'];
        // $newProject->save();
        // return redirect()->route('admin.projects.show',$newProject->id);

        // dd($request);

        $img_path = Storage::put('uploads',$request['image']); 

        $data = $request->validate([
            'title' => ['required', 'min:1','max:34'],
            'description' => ['required','min:10','max:1000'],
            // 'image' => ['file'],
            'group_name' => ['required'],
            'started_at' => ['required'],
            'finished_at' => ['required'],
            'final_score' => ['required'],
        ]);
        $data['image'] = $img_path;
        $newProject = Project::create($data);
        $newProject->save();
        return redirect()->route('admin.projects.show', $newProject->id);    

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $data = $request->all();
        // $project->update($data);
        // return redirect()->route('admin.projects.show',$project->$id);
        $project = Project::findOrFail($id);
        $data = $request->validate([
            'title' => ['required', 'min:1','max:34'],
            'description' => ['required','min:10','max:1000'],
            'group_name' => ['required'],
            'started_at' => ['required'],
            'finished_at' => ['required'],
            'final_score' => ['required'],
        ]);
        $project->update($data);
        return redirect()->route('admin.projects.show',compact('project'));    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
