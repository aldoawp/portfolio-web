<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;


class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects',[
            'projects' => Projects::latest()->paginate(8)
        ]);
    }

    public function destroy($id) 
    {
        Projects::destroy($id);
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'project_name' => 'required',
            'category' => 'required',
            'members' => 'required',
            'company' => 'required',
            'time_completion' => 'required',
            'overview' => 'required',
            'scale' => 'required',
            'status' => 'required',
            'challenges' => 'required',
            'solutions' => 'required',
            'tech_stack' => 'required',
            'performance_metrics' => 'nullable',
            'project_thumbnail' => 'nullable',
            'impacts' => 'required',
            'lesson_learned' => 'required',
        ]);

        // Projects::create($request->except(['_token']));
        Projects::create($formFields);

        return redirect('/projects');
    }
}
