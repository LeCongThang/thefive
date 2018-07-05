<?php
/**
 * Created by PhpStorm.
 * User: ThangLe
 * Date: 7/5/2018
 * Time: 1:02 AM
 */

namespace App\Http\Controllers\Backend\Office;

use App\Http\Controllers\Controller;


class OfficeController extends Controller
{
    /**
     * OfficeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index()
    {
        return view('backend.office.index');
    }
}
