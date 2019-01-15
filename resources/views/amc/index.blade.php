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
            <th width="80px">AMC</th>
        </tr>
        @foreach( $projectmanagements as $projectmanagement)
        <tr>
           <td>{{ ++$i}}</td>
           <td>{{ $projectmanagement->order_no}}</td>
           <td>{{ $projectmanagement->customer->cust_name}}</td>
           <td>{{ $projectmanagement->product->name}}</td>
           <td>
                <a class="btn btn-info" href="{{route('projectmanagementamc.create', ['id'=> $projectmanagement->id])}}">Create</a>
            </td>
        </tr>
        @endforeach
    </table>

    @endsection