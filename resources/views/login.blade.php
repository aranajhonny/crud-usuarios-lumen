@extends('layout')
@section('content')
<body class="login-div">
  <div class="container">
    <div id="loginbox" style="margin-top:3.5%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-primary" >
        <div class="panel-heading">
          <center><div class="panel-title"><strong>Welcome</strong></div></center>
        </div>

        <div style="padding-top:30px" class="panel-body" >
          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
          <form action="" method="post" name="login">

            <div style="margin-bottom: 25px" class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
             <input type="text" class="form-control" name="username" placeholder="username"   id="username" required="true">
           </div>

           <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="password"  id="password" required="true">
          </div>

          <div class="input-group">

          </div>

          <div class="form-group">
            <div type="submit" id="login" class="col-md-3 col-md-offset-4 btn btn-info controls">Sign in</div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<script type="text/javascript">
  $(function(){
    $('#login').click(function(e){
      e.preventDefault();
         login();
      });
    });

    function  login(){
       var username = $('[name=username]')[0].value;
       var password = $('[name=password]')[0].value;
       $.ajax({
        type: "POST",
        url: "{{ url('/login') }}",
        data: {username:username, password:password},
      }).done(function(data){
        if(data.auth === "true"){
          location.replace("{{ url('user/list') }}");
        }else{
          alert("Username or password Incorrect");
        }
      });
    };
</script>
@endsection
