@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h4 class="panel-title">
            <b>AMC Details</b>
            <a class="btn btn-success" href="{{route('projectmanagementamc.edit', ['id'=>$amc->id])}}" style="float: right;">Edit</a>
        </h4>
    </div>
    <!-- panel body -->
    <!-- <div id="accordionOne" class="panel-collapse collapse in"> -->
    <div class="panel-body">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4">
                    <b>Customer Name :</b> {{$customer->cust_name}}
                </div>
                <div class="col-sm-4">
                    <b>ISO service :</b> {{$product->name}}
                </div>
                <div class="col-sm-4">
                    <b>Order No :</b> {{$project->order_no}}
                </div>
            </div>
            <br>
            <div class="row">
                @if($amc->project_cost)
                <div class="col-sm-4">
                    <b>Project Cost :</b> {{$amc->project_cost}}
                </div>
                @endif
                @if($amc->purchase_ordr)
                <div class="col-sm-4">
                    <b>Purchase Order :</b> {{$amc->purchase_ordr}}
                </div>
                @endif
                @if($amc->period)
                <div class="col-sm-4">
                    <b>Period :</b> {{$amc->period}}
                </div>
                @endif
            </div>
            <br>

            <div class="row ">
                @if($amc->start_plnd_dt)
                <div class="col-sm-4">
                    <b>Start Planned Date :</b> {{Carbon\Carbon::parse($amc->start_plnd_dt)->format('d-m-Y')}}
                </div>
                @endif
                @if($amc->start_actl_dt)
                <div class="col-sm-4">
                    <b>Start Actual Date :</b> {{Carbon\Carbon::parse($amc->start_actl_dt)->format('d-m-Y')}}
                </div>
                @endif
            </div>
            <br>

            <div class="row">
                @if($amc->visit1_dt)
                <div class="col-sm-4">
                    <b>Visit One :</b> {{Carbon\Carbon::parse($amc->visit1_dt)->format('d-m-Y')}}
                </div>
                @endif
                @if($amc->payment_1)
                <div class="col-sm-4">
                    <b>Payment One :</b> {{$amc->payment_1}}
                </div>
                @endif
            </div>
            <br>

            <div class="row ">
                @if($amc->visit2_dt)
                <div class="col-sm-4">
                    <b>Visit Two :</b> {{Carbon\Carbon::parse($amc->visit2_dt)->format('d-m-Y')}}
                </div>
                @endif
                @if($amc->payment_2)
                <div class="col-sm-4">
                    <b>Payment Two :</b> {{$amc->payment_2}}
                </div>
                @endif
            </div>
            <br>

            <div class="row ">
                @if($amc->visit3_dt)
                <div class="col-sm-4">
                    <b>Visit Three :</b> {{Carbon\Carbon::parse($amc->visit3_dt)->format('d-m-Y')}}
                </div>
                @endif
                @if($amc->payment_3)
                <div class="col-sm-4">
                    <b>Payment Three :</b> {{$amc->payment_3}}
                </div>
                @endif
            </div>
            <br>

            <div class="row ">
                @if($amc->visit4_dt)
                <div class="col-sm-4">
                    <b>Visit Four :</b> {{Carbon\Carbon::parse($amc->visit4_dt)->format('d-m-Y')}}
                </div>
                @endif
                @if($amc->payment_4)
                <div class="col-sm-4">
                    <b>Payment Four :</b> {{$amc->payment_4}}
                </div>
                @endif
            </div>
            <br>

        </div>
    </div>
</div>
@endsection
