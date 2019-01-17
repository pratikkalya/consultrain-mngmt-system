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
        // if($request->ajax())
        // {
        //     $output =  "";
        //     $customers = Customer::where('cust_name', $request)->get();

        //     if($customer){
        //         foreach($customer->projectManagements as $projectManagement){
        //             $output.='<tr>'.
        //                         '<td>'.$projectManagement->customer->cust_name.'</td>'.
        //                         '<td>'.$projectManagement->order_no.'</td>'.
        //                         '<td>'.$projectmanagement->project_lead.'</td>'.
        //                         '<td>'.$projectmanagement->product->name.'</td>'.
        //                         '<td>'.$projectmanagement->agency->agency_name.'</td>'.
        //                         '</tr>';
        //         }
        //         return Response($output);
        //     }
        // }
            $projects = ProjectManagement::with('customer')->with('product')->with('agency')->get();
            // dd($projects);
            return response()->json(['data'=> $projects, 'code'=> 200]);
            

    }
}
