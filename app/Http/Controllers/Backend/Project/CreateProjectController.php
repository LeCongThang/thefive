<?php

/**
 * Created by PhpStorm.
 * User: ThangLe
 * Date: 7/5/2018
 * Time: 1:08 AM
 */

namespace App\Http\Controllers\Backend\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Validator;

class CreateProjectController extends Controller
{
    /**
     * CreateProjectController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Create()
    {
        return view('backend.project.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function Storage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_vi' => 'required|unique:project|max:255',
            'images' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/project')
                ->withErrors($validator)
                ->withInput();
        } else {
            $project = new Project();
            $project->project_name_vi = $request->project_name_vi;
            $project->project_name_en = $request->project_name_en;
            $project->description_en = $request->description_en;
            $project->description_en = $request->description_en;
            $project->expertise_id = $request->expertise_id;
            $project->category_id = $request->category_id;
            if($project->save()){
                return redirect('/admin/project');
            }else{
                return redirect('admin/project')
                    ->withErrors('Them du an that bai')
                    ->withInput();
            }

        }

    }
}

