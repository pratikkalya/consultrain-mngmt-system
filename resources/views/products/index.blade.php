@extends('layouts.app')

@section('content')
<div class="row" style="padding: 3px 15px;margin:10px">
    <h2 style="padding: 2px;">ISO List</h2>

    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('products.create') }}"> Create New</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered" style="background:white">
        <tr>
            <th>Name</th>
            <!-- <th>Details</th> -->
            <th width="210px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>

            <td>{{ $product->name }}</td>
            <!-- <td>{{ $product->detail }}</td> -->
            <td>
                <form action="{{route('products.destroy', ['id'=> $product->id])}}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>



                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>


                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
{!! $products->links() !!}
</div>
@endsection
