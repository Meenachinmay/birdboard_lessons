<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function store(Request $request){
        Project::create([
            'title' => $request['title'],
            'description' => $request['description']
        ]);
    }

    public function index(){
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }
}
