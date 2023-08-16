<?php include("header.php") ?>
  <div class="container" id="container">
    <div class="form sign_up">
      <form action="#" class="form">
        <h1 class="headings">Create An Account</h1>
        <span class="span">Use email for registration</span>
        <div class="file">
         <label for="formFile" class="form-label"><b>Upload the CV</b></label>
         <input class="form-control mb-2" type="file" id="formFile">
        </div>
        <div class="form-floating-sm">
        <label for="floatingSelect"><b>Category</b></label>
      <select class="form-select mb-2" id="floatingSelect" aria-label="Floating label select example">
           <option selected>Select Any One</option>
           <option value="1">One</option>
           <option value="2">Two</option>
           <option value="3">Three</option>
       </select>      
    </div>
    <label for="exampleDataList" class="form-label"><b>Skill Set</b></label>
            <input class="form-control mb-2" list="datalistOptions" id="exampleDataList" placeholder="Write your skill here...">
               <datalist id="datalistOptions">
                 <option value="San Francisco">
                 <option value="New York">
                 <option value="Seattle">
                 <option value="Los Angeles">
                 <option value="Chicago">
               </datalist>
               <label for="exampleDataList" class="form-label"><b>Preferred Location</b></label>
            <input class="form-control mb-2" list="datalistOptions" id="exampleDataList" placeholder="Write the location here...">
               <datalist id="datalistOptions">
                 <option value="Kolkata">
                 <option value="Mumbai">
                 <option value="Bangalore">
                 <option value="Gujrat">
                 <option value="Pakistan">
               </datalist>
               <div class="form-floating-sm mb-2">
        <label for="floatingSelect"><b>Experience</b></label>
      <select class="form-select mb-2" id="floatingSelect" aria-label="Floating label select example">
           <option selected>Select Any One</option>
           <option value="1">One</option>
           <option value="2">Two</option>
           <option value="3">Three</option>
       </select>    
         <label for="inputPassword5" class="form-label"><b>Latest Qualification</b></label>
         <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Write Your Qualification">
         <div class="form-floating-sm">
        <label for="floatingSelect"><b>Pass Out Year</b></label>
      <select class="form-select mb-2" id="floatingSelect" aria-label="Floating label select example">
           <option selected>Select Any One</option>
           <option value="1">2010</option>
           <option value="2">2011</option>
           <option value="3">2012</option>
           <option value="4">2013</option>
       </select>      
    </div>
        </div>
        <button class="button">Create Account</button>
      </form>
    </div>
    <div class="form sign_in">
      <form action="#" class="form">
        <h1 class="headings">Login</h1>
        <span class="span">Login In with your Account</span>
        <div class="form-floating mb-2">
          <input type="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="Password" placeholder="Password" onclick="pass()"><i class="fa-solid fa-eye" id="eye"></i>
          <label for="floatingPassword">Password</label>
          <span id="msg"></span>
        </div>
        <span class="span">Forgot your <span class="span forgot">password?</span></span>
        <button class="button" onclick="login()">Login</button>
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