@extends('layouts.app')

@section('content')


<div class="container">
    <h2>Users</h2>
    <div class="row">
        <div class="col-lg-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                        {{$user->name}}
                        </td>
                        <td>{{$user->email}}</td>
                        <td>
                        @if($user->user_type == 'admin')
                        <p>Admin</p>
                        @elseif($user->user_type == 'employee')
                        <p>Employee</p>
                        @endif
                        </td>
                        <td>
                        <a href="{{route('users.edit', ['id'=> $user->id])}}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
