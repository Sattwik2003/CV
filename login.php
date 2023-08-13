<?php include("header.php") ?>
  <div class="container" id="container">
    <div class="form sign_up">
      <form action="#" class="form">
        <h1 class="headings">Create An Account</h1>
        <span class="span">Use email for registration</span>
        <input type="text" placeholder="User Name" class="input">
        <input type="email" placeholder="Email" class="input">
        <input type="password" placeholder="Password" class="input">
        <button class="button">Create Account</button>
      </form>
    </div>
    <div class="form sign_in">
      <form action="#" class="form">
        <h1 class="headings">Login</h1>
        <span class="span">Login In with your Account</span>
        <div class="form-floating mb-2">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" onclick="pass()"><i class="fa-solid fa-eye" id="eye"></i>
          <label for="floatingPassword">Password</label>
          <span id="msg"></span>
        </div>
        <span class="span">Forgot your <span class="span forgot">password?</span></span>
        <button class="button">Login</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-pannel overlay-left">
          <h1 class="headings">Already have an account</h1>
          <p class="p">Please Login</p>
          <button id="signIn" class="overBtn button">SignIn</button>
        </div>
        <div class="overlay-pannel overlay-right">
          <h1 class="headings">Create Account</h1>
          <p class="p">New to our Website?</p>
          <button id="signUp" class="button overBtn">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
  <?php include("footer.php") ?>