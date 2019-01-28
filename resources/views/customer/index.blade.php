@extends('layouts.app')

@section('content')
<div class="row" style="padding: 3px 15px;margin:10px">
    <h2>Customers Lists</h2>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('customer.create') }}"> Create New</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered" style="background:white">
        <tr>
            <th>Customer Name</th>
            <th>Phone number</th>
            <th>Email</th>
            <th width="210px">Action</th>
        </tr>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->cust_name}}</td>
            <td>{{$customer->cust_phone_number}}</td>
            <td>{{$customer->cust_email}}</td>
            <td>
                <form action="{{ route('customer.destroy',$customer->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('customer.show',$customer->id) }}">Show</a>



                    <a class="btn btn-primary" href="{{ route('customer.edit',$customer->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<script>

</script>
@endsection
