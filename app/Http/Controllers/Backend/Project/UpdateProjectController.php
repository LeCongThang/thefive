<?php

namespace App\Http\Controllers\Backend\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class UpdateProjectController extends Controller
{
    /**
     * UpdateProjectController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param $project_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Edit($project_id)
    {
        $project = Project::find($project_id);
        if ($project) {
            return view('backend.project.update', ['project' => $project]);
        } else {
            return view('backend.layout_partial.404');
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function Update(Request $request)
    {
        $project_id = $request->route('project_id');
        $project = Project::find($project_id);
        if ($project) {

            return redirect('/admin/project');
        } else {
            return view('backend.layout_partial.404');
        }

    }
}
