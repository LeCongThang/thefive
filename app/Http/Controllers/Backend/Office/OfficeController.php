<?php
/**
 * Created by PhpStorm.
 * User: ThangLe
 * Date: 7/5/2018
 * Time: 1:02 AM
 */

namespace App\Http\Controllers\Backend\Office {

    use App\Http\Controllers\Controller;


    class OfficeController extends Controller
    {
        public function Index()
        {

            return view('backend.office.index');
        }
    }
}