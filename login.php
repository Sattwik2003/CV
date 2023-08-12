<?php include("header.php") ?>
  <div class="container" id="container">

    <!-- sign Up form section start-->
    <div class="form sign_up">
      <form action="#">
        <!-- heading -->
        <h1>Create An Account</h1>
        <span>Use email for registration</span>
        <!-- input fields start -->
        <input type="text" placeholder="User Name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button>Create Account</button>
        <!-- input fields end -->
      </form>
    </div>
    <!-- sign Up form section end-->

    <!-- sign in form section start-->
    <div class="form sign_in">
      <form action="#">
        <!-- heading -->
        <h1>Login</h1>
        <span>Login In with your Account</span>
        <!-- input fields start -->
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password"><i class="fa-solid fa-eye" id="eye"></i>
          <label for="floatingPassword">Password</label>
        </div>
        <span>Forgot your <span class="forgot">password?</span></span>
        <button class="button">Login</button>
        <!-- input fields end -->
      </form>
    </div>
    <!-- sign in form section end-->
    <!-- overlay section start-->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-pannel overlay-left">
          <h1>Already have an account</h1>
          <p>Please Login</p>
          <button id="signIn" class="overBtn">SignIn</button>
        </div>
        <div class="overlay-pannel overlay-right">
          <h1>Create Account</h1>
          <p>New to our Website?</p>
          <button id="signUp" class="overBtn button">Sign Up</button>
        </div>
      </div>
    </div>
    <!-- overlay section start-->
  </div>
  <?php include("footer.php") ?>