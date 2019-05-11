<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Project;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('project.index');
    }

    Public function edit($id) {
        $project =  Project::find($id);
        return view('project.index', ['project' => $project, 'id' => $id]);
    }

    Public function store( Request $request ) {

        
        $project = Project::firstOrNew(array('id' => $request->id));
        $project->user_id = Auth::id();
        $project->rep_id = 0;
        $project->utility_id = 0;
        $project->usage_id = 0;
        $project->active_prop_id = 0;
        $project->name = $request->name;
        $project->surname = $request->surname;
        $project->email = $request->email;
        $project->phone = $request->phone;
        $project->address = $request->address;
        $project->city = $request->city;
        $project->state = $request->state;
        $project->zipcode = $request->zipcode;

        $project->save();
       
        return view('project.index', ['id' => $project->id, 'project' => $project]);
    }
}
