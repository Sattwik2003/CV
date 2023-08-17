<?php include("header.php") ?>
<body class="body_jobform">
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form class="awesome-form">
        <h2 class="text-center">Add Jobs</h2>

        <div class="form-group">
            <label for="job_role">Job Role</label>
          <input type="text" class="form-control" id="job_role">
        </div>
        <div class="form-group">
            <label for="jobdesc">Job Description</label>
          <textarea class="form-control" id="jobdesc"></textarea>
        </div>
        <div class="form-group">
            <label for="change">Job Photo</label>
    <img id="change" height="220" width="220"  src="Photos/no_image.jpg" >
  <input type="file" onchange="showfront(event);" >
        </div>
        <div class="button_job">
        <button type="button" class="btn btn-block btn-primary">Submit</button>
        </div>  
      </form>
    </div>
  </div>
</div>
</body>
<?php include("footer.php") ?>