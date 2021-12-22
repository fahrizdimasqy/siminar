<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/6c4e910690.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('logo/favicon.png') }}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
<div class="global-container">
      <div class="card login-form">
        <div class="card-body">
          <h1 class="card-title text-center">L O G I N</h1>
          <h6 class="card-subtitle text-muted text-center">Please login to use this site!</h6>

        </div>
        <div class="card-text">
          <form action="/actionlogin" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password*</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Min 8 character">
            </div>

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>

            <!-- <div class="d-grid gap-2 mt-3">
              <button type="submit" class="btn btn-primary"><img src="google.png" class="img"> Sign up with Gmail</button>
            </div>
            
              <div class="d-grid mt-3">
                <label>Not Registered yet ? <a href="signup.php" class="link">Create an account</a></label>
              </div> -->
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <script src="{{ asset('js/custom.js') }}"></script>
    @yield('script')
</body>
</html>