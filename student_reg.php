<?php 
   $con = mysqli_connect("localhost","root","","dbregistration");
  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>iQ System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.theme.css">
  <link rel="stylesheet" href="asset/fonts/glyphicons-halflings-regular">
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>



<div class="container-fluid">
  <div class="row">
   <div class="panel panel-danger">
      <div class="panel-heading"style="text-align: center;"><h3>STUDENT REGISTRATION</h3></div>
        <div class="panel-body">
          <div id="rtn"></div>
      <form id="newuser" method="POST" class="form-vertical">
       <div class="col-sm-4">
  <div class="form-group">
    <label for="fname">Full Name:</label>
    <input type="text" class="form-control" name="fname" required>
  </div>
 </div>

   <div class="col-sm-4">
  <div class="form-group">
    <label for="homeaddress">Home Address:</label>
    <input type="text" class="form-control" name="homeaddress" required>
  </div>
  </div>
  <div class="col-sm-2">
  <div class="form-group">
    <label for="phone">Telephone:</label>
    <input type="text" class="form-control" name="phone" required>
  </div>
  </div>
  <div class="col-sm-3">
   <div class = "form-group">
      <label for = "gender">Select Gender</label>      
      <select class = "form-control" name="gender" id="gender">
         <option></option>
        <?php
          $result = mysqli_query($con,"SELECT * FROM gender");

          while ($row = mysqli_fetch_array($result)) {
          echo '<option value="',$row['id'],'">',$row['name'],'</option>';
              }
               ?>
      </select>
   </div>
  
</div>

    <div class="col-sm-3">
   <div class = "form-group">
      <label for="roo">Select Region</label>
      
      <select class = "form-control" id="roo" name="roo">
         <option></option>
         <?php
            $result = mysqli_query($con,"SELECT * FROM roo");

            while ($row = mysqli_fetch_array($result)) {
            echo '<option value="',$row['id'],'">',$row['name'],'</option>';
                }
            ?>
      </select>
   </div>
 </div>

 <div class="col-sm-2">
 <div class = "form-group">
      <label for="roo">Select Class</label>      
      <select class = "form-control" id="class" name="class">
         <option></option>
         <?php
            $result = mysqli_query($con,"SELECT * FROM class");

            while ($row = mysqli_fetch_array($result)) {
            echo '<option value="',$row['id'],'">',$row['name'],'</option>';
                }
            ?>
      </select>
   </div>
 </div>

 <div class="col-sm-2">
  <div class = "form-group">
      <label for="sub_class">Select Subclass</label>      
      <select class = "form-control" id="sub_class" name="sub_class">
         <option></option>
         <?php
            $result = mysqli_query($con,"SELECT * FROM sub_classs ");

            while ($row = mysqli_fetch_array($result)) {
            echo '<option value="',$row['id'],'">',$row['name'],'</option>';
                }
            ?>
      </select>
   </div>  
</div>



<div class="col-sm-3">
  <div class="form-group">
    <label for="dob">Date Of Birth:</label>
    <input type="dob" class="form-control" name="dob">
  </div>
  </div>
  <div class="col-sm-2">
  <div class="form-group">
    <label for="pob">Place Of Birth:</label>
    <input type="pob" class="form-control" name="pob">
  </div>
  </div>

 <div class="col-sm-2">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" name="email">
  </div> 
</div>


  <div class="col-sm-3">
  <div class="form-group">
    <label for="nic">Student National ID Number:</label>
    <input type="nic" class="form-control" name="nic">
  </div>
</div>
  
  <div class="col-sm-3">
  <div class = "form-group">
      <label for="health_status">Health Status</label>      
      <select class = "form-control" id="health_status" name="health_status">
         <option></option>
          <?php
            $result = mysqli_query($con,"SELECT * FROM medical_status");

            while ($row = mysqli_fetch_array($result)) {
            echo '<option value="',$row['id'],'">',$row['name'],'</option>';
                }
            ?>
      </select>
   </div>
  </div>
  <!-- <div class="col-sm-7"> -->
  

    <div class="col-sm-3">
   <div class="form-group">
    <label for="g_name">Guidiance Full Name:</label>
    <input type="text" class="form-control" name="g_name">
  </div>
</div>
  
   <div class="col-sm-2">
  <div class="form-group">
    <label for="g_email">Guidiance Email:</label>
    <input type="text" class="form-control" name="g_email">
  </div>
</div>

    
     <div class="col-sm-2">
   <div class = "form-group">
     <label for="g_address">Guidiance Address:</label>
    <input type="text" class="form-control" name="g_address">
   </div>
 </div>


  <div class="col-sm-4">
   <div class="form-group">
    <label for="g_occupation">Guidiance Occupation:</label>
    <input type="text" class="form-control" name="g_occupation">
  </div>
  </div>

    <div class="col-sm-3">
   <div class = "form-group">
      <label for="g_gender">Gender</label>      
      <select class = "form-control" id="g_gender" name="g_gender">
         <option></option>
          <?php
            $result = mysqli_query($con,"SELECT * FROM gender");

            while ($row = mysqli_fetch_array($result)) {
            echo '<option value="',$row['id'],'">',$row['gender'],'</option>';
                }
            ?>
      </select>
   </div>
 </div>


 <div class="col-sm-3">
  <div class = "form-group">
      <label for="accademic_yr">Select Accademic Year</label>      
      <select class = "form-control" id="accademic_yr" name="accademic_yr">
         <option></option>
         <?php
            $result = mysqli_query($con,"SELECT * FROM accademic_yr ");

            while ($row = mysqli_fetch_array($result)) {
            echo '<option value="',$row['id'],'">',$row['name'],'</option>';
                }
            ?>
      </select>
   </div>  
</div>

  
<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="new" name="btn-signup" class="btn btn-default">Submit</button>      
    </div>
  </div>
 
  
</div>
    </div>
  </div>
</form>

</div>
</div>
</div>
</div>
</div>
    
       
  <script src="asset/js/jquery-2.1.4.min.js"></script>
    <script src="js/mainn.js"></script>
</body>
</html>
