<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class ProjectsController extends Controller
{
    protected $projects;

    public function __construct()
    {
        $this->projects = Project::all();
    }

    public function index() //=======================
    {
        return view('project.index', ['projects' => $this->projects]);
    }

    public function create()
    {
        $user = Auth::user();
        if (Gate::forUser($user)->allows('create-project')) {
            return view('project.create');
        } else {
            abort(403);
        }
    }


    public function store(Request $request)
    {
        $user = Auth::user();
        Project::create(array_merge($request->all(), ['creator_user_id' => $user->id]));
        return redirect('/project')->with('success', 'Project created successfully');
    }

    public function show($id)
    {
        $user = Auth::user();
        if (Gate::forUser($user)->allows('show-project')) {
            $project = Project::findOrFail($id);
            return view('project.show', ['project' => $project]);
        }else{
            abort(403);
        }
    }

    public function edit($id)
    {
        $user = Auth::user();
        $project = Project::findOrFail($id);
        if (Gate::forUser($user)->allows('edit-project', $project)) {
            return view('project.edit', ['project' => $project]);
        }else{
            abort(403);
        }
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());
        return redirect('/project/' . $project->id)->with('success', 'Project updated successfully!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $user = Auth::user();
        if (Gate::forUser($user)->allows('delete-project', $project)) {
            $project->delete();
            return redirect('/project')->with('success', 'Project deleted successfully!');
        }else{
            abort(403);
        }
    }

}
