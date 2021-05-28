<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1>Student Detail</h1>
        
        <?php
        include "db_connect.php";
        //include "search_student.php";
        ?>
        
        <form class="form-horizontal" action="search_key.php">
<fieldset>

<!-- Form Name -->
<legend>Search Department Database</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Keyword">Search</label>
  <div class="col-md-5">
    <input id="Keyword" name="Keyword" type="search" placeholder="e.g. CSE,ECE" class="form-control input-md" required="">
    <p class="help-block">Enter the Department </p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form>

        
        <hr>
        
        <form class="form-horizontal" action="add_student.php">
<fieldset>

<!-- Form Name -->
<legend>Add Student to the Database</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NewID">Enter the ID </label>  
  <div class="col-md-5">
  <input id="NewID" name="NewID" type="text" placeholder="e.g.RA1811003010..." class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NewName">Enter the Name</label>  
  <div class="col-md-5">
  <input id="NewName" name="NewName" type="text" placeholder="e.g.xyz" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NewDept">Enter the Department</label>  
  <div class="col-md-5">
  <input id="NewDept" name="NewDept" type="text" placeholder="e.g.CSE" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NewGrade">Enter the Grade</label>  
  <div class="col-md-5">
  <input id="NewGrade" name="NewGrade" type="text" placeholder="e.g.O,A+" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-success">Add</button>
  </div>
</div>

</fieldset>
</form>

        
        <?php
        //include "search_key.php";
        $mysqli->close();
        
        ?>

    </body>


</html>