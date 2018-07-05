<?php
/**
 * Created by PhpStorm.
 * User: ThangLe
 * Date: 7/5/2018
 * Time: 3:52 PM
 */

namespace App\Http\Controllers\Backend\Expertise;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateExpertiseController extends Controller
{
    public function Create(){
        return view('backend.expertise.create');
    }
    public function Storage(Request $request){
        return redirect('/admin/expertise');
    }

}