<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Amc;

class AmcOrderSearchController extends Controller
{
    public function search(){
        $amcs = Amc::with('projectManagement')->get();

        return response()->json(['data'=> $amcs, 'code'=> 200]);
    }
}
