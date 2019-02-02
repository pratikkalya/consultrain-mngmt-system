@extends('layouts.app')

@section('content')

<div class="container" style="padding: 3px 15px;margin:10px">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New User</h2>
            </div>
        </div>

        <form action="{{route('users.store')}}" method="post">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {{csrf_field()}}
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="password">User Type:</label>
                    <select name="user_type" class="form-control" id="usertype" required>
                        <option value="employee">Employee</option>
                        <option value="admin">Admin</option>
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
