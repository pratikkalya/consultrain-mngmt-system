<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use App\ProjectManagement;

class CustomerController extends Controller
{
    public function search()
    {
            $projects = ProjectManagement::with('customer')->with('product')->with('agency')->get();
            // dd($projects);
            return response()->json(['data'=> $projects, 'code'=> 200]);
    }
}
