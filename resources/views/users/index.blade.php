@extends('layout')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ url('user/create') }}" class="btn btn-sm btn-info btn-addon"><i class="glyphicon glyphicon-plus"></i>Create</a>
            <a href="{{ url('logout') }}" class="btn btn-sm btn-danger btn-addon"><i class="glyphicon glyphicon-plus"></i>Logout</a>
        </div>
        <table class="table table-bordered has-action">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>First name</th>
                    <th>Second name</th>
                    <th>email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->second_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <a href="{{ url('user/edit', ['id' => $user->id]) }}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{ url('user/delete', ['id' => $user->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection