<?php

/**
 * Created by PhpStorm.
 * User: ThangLe
 * Date: 7/5/2018
 * Time: 1:08 AM
 */

namespace App\Http\Controllers\Backend\Project {

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class CreateProjectController extends Controller
    {
        public function Create(){
            return view('backend.project.create');
        }
        public function Stored(Request $request){
            return redirect('/admin/project');
        }
    }
}
