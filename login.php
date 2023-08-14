<?php include("header.php") ?>
  <div class="container" id="container">
    <div class="form sign_up">
      <form action="#" class="form">
        <h1 class="headings">Create An Account</h1>
        <span class="span">Use email for registration</span>
        <div class="form-container" enctype='multipart/form-data'>
          <div class="upload-files-container">
		        <div class="drag-file-area">
			      <span class="material-icons-outlined upload-icon"> file_upload </span>
			      <h4 class="dynamic-message"> Drag & drop any file here </h4>
			      <label class="label"> or <span class="browse-files"> <input type="file" class="default-file-input"/> <span class="browse-files-text">browse file</span> <span>from device</span> </span> </label>
		      </div>
		      <span class="cannot-upload-message"> <span class="material-icons-outlined">error</span> Please select a file first <span class="material-icons-outlined cancel-alert-button">cancel</span> </span>
	    	  <div class="file-block">
		  	   <div class="file-info"> <span class="material-icons-outlined file-icon">description</span> <span class="file-name"> </span> | <span class="file-size">  </span> </div>
		  	    <span class="material-icons remove-file-icon">delete</span>
		  	    <div class="progress-bar"> </div>
		       </div>
		      <button type="button" class="upload-button"> Upload </button>
	       </div>
        </div>
        <div class="form-floating-sm mb-2">
        <label for="floatingSelect">Category</label>
      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
           <option selected>Select Any One</option>
           <option value="1">One</option>
           <option value="2">Two</option>
           <option value="3">Three</option>
       </select>      
    </div>
    <label for="exampleDataList" class="form-label"><b>Skill Set</b></label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Write your skill here...">
               <datalist id="datalistOptions">
                 <option value="San Francisco">
                 <option value="New York">
                 <option value="Seattle">
                 <option value="Los Angeles">
                 <option value="Chicago">
               </datalist>
               <label for="exampleDataList" class="form-label"><b>Preferred Location</b></label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Write the location here...">
               <datalist id="datalistOptions">
                 <option value="Kolkata">
                 <option value="Mumbai">
                 <option value="Bangalore">
                 <option value="Gujrat">
                 <option value="Pakistan">
               </datalist>
               <div class="form-floating-sm mb-2">
        <label for="floatingSelect">Experience</label>
      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
           <option selected>Select Any One</option>
           <option value="1">One</option>
           <option value="2">Two</option>
           <option value="3">Three</option>
       </select>      
    </div>
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