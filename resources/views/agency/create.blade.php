@extends('layouts.app')
  
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Service</h2>
        </div>
    </div>
</div>
   
<div class="row">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('agency.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="value">Services:</label>
                                    <select class="form-control" id="sample_id" name="sample_id" required>
                                        @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Specification:</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <input type="text" class="form-control" name="description" id="description">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container-fluid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

</div>
@endsection