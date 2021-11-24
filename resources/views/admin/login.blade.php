<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>@if(Request::segment(1) != "") {{ucfirst(Request::segment(1)).' | ' .config('app.name')}} @else {{ config('app.name') }} @endif </title>

    <!-- Bootstrap -->
    <link href="{{asset('public/admin_theme/vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/admin_theme/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('public/admin_theme/build/custom.min.css')}}" rel="stylesheet">

  </head>

  <body class="login">
    <div>
      
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            @if($errors->any())
                    <div class="alert alert-danger">
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                    </div>
            @endif
            <form action="{{asset('admin')}}" method="post">
              @csrf
              <h1>Admin Login</h1>
              
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password"/>
              </div>
              <div>
                <input type="submit" name="login" value="Log in" class="btn btn-primary submit">
                <a class="backhome" href="{{asset('/')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Back to Website</a>
              </div>

              <div class="clearfix"></div>

              
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
