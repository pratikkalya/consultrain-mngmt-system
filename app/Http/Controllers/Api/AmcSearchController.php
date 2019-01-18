<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProjectManagement;

class AmcSearchController extends Controller
{
    public function search(){
        $projectmanagements = ProjectManagement::where('amc', 'yes')->with('customer')->with('product')->get();

        return response()->json(['data'=> $projectmanagements, 'code'=> 200]);
    }
}
