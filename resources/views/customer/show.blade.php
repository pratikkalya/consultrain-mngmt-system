@extends('layouts.app')
  
@section('content')

<div>
  <h1>{{$customer->name}}</h1>      
</div>
<br>
<div class="row" style="padding: 3px 15px;margin:10px">
<div class="row">
    <div class="col-md-12">
    <a class="btn btn-primary"  style="float:right;" href="{{ route('customer.index') }}"> Back</a>
            <h3 class="c-grey-900 mB-20">Test Details</h3>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">
                        <b>Customer/Comany Name :</b> {{$customer->cust_name}}
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <b>Email:</b> {{$customer->cust_email}}
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <b>Customer/Company Phone no:</b> {{$customer->cust_phone_number}}
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <b>Contact Person :</b> {{$customer->contact_person_name}}
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <b>Contact Person No :</b> {{$customer->contact_person_number}}
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <b>Address :</b> {{$customer->street_name}}, {{$customer->city}}, {{$customer->state}}, {{$customer->pincode}}
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <b>Country :</b>{{$customer->country}}
                    </li>
                </ul>
    </div>
</div><br>
<div class="row">
    <div class="col-sm-6">
    <h3>Service Details</h3><br>
    <table class="table table-bordered" style="background:white";>
    <thead>
    <tr>
    <th>Service Name</th>
    <th>Agency Name</th>
    </tr>
    </thead>
    <tbody>
    @if($customer->projectManagements->count() != 0)
        @foreach($customer->projectManagements as $project)
        <tr>
        <td>{{$project->product->name}}</td>
        <td>{{$project->agency->agency_name}}</td>
        </tr>
        @endforeach
    @else
    <tr>
    <td>Empty</td>
    <td>Empty</td>
    </tr>
    @endif
    </tbody>
    </table>
    </div>
</div>
</div>
@endsection