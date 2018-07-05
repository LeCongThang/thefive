<?php

namespace App\Http\Controllers\Backend\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getAll()
    {
        $projects = Project::all()->sortByDesc('created_at');
        return view('backend.project.index', ['projects' => $projects]);
    }
    public function getById($project_id){

    }
    public function deleteProject($project_id){

    }
    public function destroyProject($project_id){

    }
}
