@extends('layouts.app')
 
@section('content')

<h2 style="padding: 2px;">AMC List</h2>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Order Number</th>
            <th>Customer Name</th>
            <th>Iso Service</th>
            <th>AMC Purchase Order</th>
            <th  width="80px">Details</th>
        </tr>
        @foreach( $amcs as $amc)
        <tr>
           <td>{{ ++$i}}</td>
           <td>{{ $amc->projectManagement->order_no}}</td>
           <td>{{ $amc->projectManagement->customer->cust_name}}</td>
           <td>{{ $amc->projectManagement->product->name}}</td>
           <td>{{$amc->purchase_ordr}}</td>
           <td>
                <a class="btn btn-info" href="{{route('projectmanagementamc.show', ['id'=> $amc->id])}}">Details</a>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $amcs->links() !!}
    @endsection