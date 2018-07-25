@extends('layout')
@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ url('user/list') }}" class="btn btn-sm btn-info btn-addon"><i class="glyphicon glyphicon-plus"></i>List</a>
            <a href="{{ url('logout') }}" class="btn btn-sm btn-danger btn-addon"><i class="glyphicon glyphicon-plus"></i>Logout</a>
        </div>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('user', ['id' => $user->id]) }}">
        <input type="hidden" name="_method" value="PUT">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit user
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" value="{{  $user->username }}">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">First name</label>
                    <div class="col-sm-10">
                        <input type="text" name="first_name" class="form-control" value="{{  $user->first_name }}">
                        <p class="help-block"></p>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Second name</label>
                    <div class="col-sm-10">
                        <input type="text" name="second_name" class="form-control" value="{{  $user->second_name }}">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" value="{{  $user->email }}">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" class="form-control" value="{{  $user->phone }}">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" value="{{  $user->address }}">
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-sm btn-info btn-addon"><i class="glyphicon glyphicon-ok"></i>Update</button>
                <a href="{{ url('user/list') }}" class="btn btn-default btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection