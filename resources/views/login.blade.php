<!DOCTYPE html>

<html lang="en" >

<head>

    <meta charset="UTF-8">
    <title>PHP Learning</title>

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

</head>
<body>
    <div class="login-wrap">
      <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
          <form class="sign-in-htm" action="{{ url('login') }}" method="GET">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="username" name="name" type="text" class="input">
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="password" name="password" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <input id="check" type="checkbox" class="check" checked>
              <label for="check"><span class="icon"></span> Keep me Signed in</label>
            </div>
            <div class="group">
              <input type="submit" class="button" value="Sign In">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="#forgot">Forgot Password?</a>
            </div>
          </form>

          <form class="sign-up-htm" action={{ url('signup') }} method="POST">
            @csrf
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="username" name="username" type="text" class="input">
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="password" name="password" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <label for="pass" class="label">Confirm Password</label>
              <input id="pass" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <input type="submit" class="button" value="Sign Up">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-1">Already Member?</a>
            </div>
          </form>

        </div>
      </div>
    </div>
</body>
@if(session()->has('jsAlert'))
    <script>
        alert({{ session()->get('jsAlert') }});
    </script>
@endif
</html>
