@extends('layout')
@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ url('user/list') }}" class="btn btn-sm btn-info btn-addon"><i class="glyphicon glyphicon-plus"></i>List</a>
            <a href="{{ url('logout') }}" class="btn btn-sm btn-danger btn-addon"><i class="glyphicon glyphicon-plus"></i>Logout</a>
        </div>
    <a href="{{ url('logout') }}" class="btn btn-sm btn-danger btn-addon"><i class="glyphicon glyphicon-plus"></i>Logout</a>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('user', ['id' => $user->id]) }}">
        <input type="hidden" name="_method" value="DELETE">
        <div class="panel panel-default">
            <div class="panel-heading">
                Delete user
            </div>
            <div class="panel-body">
                <p>Are you sure to delete user, named <del>{{ $user->username }}</del>?</p>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-sm btn-danger btn-addon"><i class="glyphicon glyphicon-ok"></i>Delete</button>
                <a href="{{ url('user/list') }}" class="btn btn-default btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection