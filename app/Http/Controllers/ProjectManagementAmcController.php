<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectManagement;
use App\Amc;

class ProjectManagementAmcController extends Controller
{
    public function create($id){
        $amc = Amc::all();
        $projectManagement = ProjectManagement::findOrFail($id);
        return view('amc.create')->with(['projectmanagement'=> $projectManagement,'amc'=> $amc]);
    }

    public function store(Request $request, $id){
        // dd($request);
        $projectManagement = ProjectManagement::findOrFail($id);
        $rules = [
            'purchase_order'=> 'required',
            'project_cost'=> 'required',
            'period'=> 'required',
        ];
        $this->validate($request, $rules);

        $data = $request->all();

        $amc = new Amc();
        $amc->order_id = $projectManagement->id;
        $amc->purchase_ordr = $request->purchase_order;
        $amc->project_cost = $request->project_cost;
        $amc->period= $request->period;
        $amc->start_plnd_dt = $request->start_plnd_dt;
        $amc->start_actl_dt = $request->start_actual_dt;
        $amc->visit1_dt= $request->visit1_dt;
        $amc->payment_1 = $request->payment_1;
        $amc->visit2_dt = $request->visit2_dt;
        $amc->payment_2= $request->payment_2;
        $amc->visit3_dt = $request->visit3_dt;
        $amc->payment_3 = $request->payment_3;
        $amc->visit4_dt= $request->visit4_dt;
        $amc->payment_4 = $request->payment_4;


        $amc->save();

      //  dd($amc);
    }

  public function index()
  
  {
    $amcs = Amc::all();
    //dd($projectmanagements);
     return view('amc.index', compact('amcs')) ->with('i', (request()->input('page', 1) - 1) * 5);


  } 
}
