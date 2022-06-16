<!DOCTYPE html>
<html>

<head>
  <title>Login|Sign-up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{url('frontend/css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
  <div id="wrapper">
    <div id="left">
      <div id="signin">
        <div class="logo">
          <a href="{{url('/')}}">Realesto</a>
        </div>
        <form>
          <div>
            <label>Email</label>
            <input type="text" class="text-input" placeholder="Enter your Username / Email" />
          </div>
          <div>
            <label>Password</label>
            <input type="password" class="text-input" placeholder="Enter your Password" />
          </div>
          <!-- <button type="submit" class="btn primary-btn">Sign In</button> -->
          <a href="#" type="submit" class="btn primary-btn">Sign In</a>
        </form>
        <div class="links">
          <a href="#">Forgot Password</a>
        </div>
        <div class="or">
          <hr class="bar" />
          <span>OR</span>
          <hr class="bar" />
        </div>
        <a href="{{url('/signup')}}" class="secondary-btn">Create an account</a>
      </div>
      <footer id="main-footer">
        <p>Copyright &copy; 2022, Realesto All Rights Reserved</p>
        <div>
          <a href="{{url('/terms')}}">Terms of use</a> | <a href="{{url('/policy')}}">Privacy Policy</a>
        </div>
      </footer>
    </div>
    <div id="right">
      <div id="showcase">
        <div class="showcase-content">
          <h1 class="showcase-text">
            Not a Member Yet! <strong>No Worries</strong>
          </h1>
          <a href="{{url('/signup')}}" class="secondary-btn">Signup Here</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>