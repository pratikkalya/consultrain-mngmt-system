@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container" style="padding: 3px 15px;margin:10px">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
            </div>
        </div>
        <form action="{{route('users.update',['id'=> $user->id])}}" method="post">

            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" required>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="user_type">User Type:</label>
                    <select name="user_type" class="form-control">
                        <option value="admin" @if($user->user_type == 'admin') selected @endif>Admin</option>
                        <option value="employee" @if($user->user_type == 'employee') selected @endif>Employee</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-8">
                <button type="submit" class="form-group btn btn-success" style="cursor: pointer">Submit</button>
            </div>
        </form>
    </div>
</div>


@endsection
