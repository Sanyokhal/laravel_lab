<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    protected $projects;

    public function __construct()
    {
        $this->projects = Project::all();
    }

    function debug_to_console($data)
    {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);

        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }

    public function index()
    {
        $this->debug_to_console("Index");
        return view('project.index', ['projects' => $this->projects]);
    }

    public function create()
    {
        $this->debug_to_console("Create");
        return view('project.create');
    }

    public function store(Request $request)
    {
        Project::create($request->all());
        return redirect('/project')->with('success', 'Project created successfully');
    }

    public function show($id)
    {
        $this->debug_to_console("Show");
        $project = Project::findOrFail($id);
        return view('project.show', ['project' => $project]);
    }

    public function edit($id)
    {
        $this->debug_to_console("Edit");
        $project = Project::findOrFail($id);
        return view('project.edit', ['project' => $project]);
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
        $project->delete();
        return redirect('/project')->with('success', 'Project deleted successfully!');
    }

}
