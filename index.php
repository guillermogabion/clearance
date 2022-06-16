<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clearance Request Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

	
	
	
	
	
</head>
<body>

<div class="main">

  <div class="container">
    <form method="POST" class="appointment-form" id="appointment-form">
        <h2>Clearance Request form</h2>
          <div class="form-group-1">
            <div class="form-group-2">
              <h3>Student Information</h3>
              <input type="text" name="studid" id="studid" placeholder="Enter Student ID" onkeyup="isempty"required />
              <input type="text" name="name" id="name" placeholder="Your Name (Family/Given/Middle)" required />
              <div class="select-list">
                <select name="course_type" id="">
                  <option selected value="">Program/year</option>
                  <option value="BSIT 1">BSIT 1</option>
                  <option value="BSIT 2">BSIT 2</option>
                </select>
              </div>
          </div>
          </div>
            <div class="form-group-2">
            <h3>Send Request to</h3>
            <input type="text" name="title" id="title" placeholder="Input Executive/Staff/Instructor ID" required />
            <input type="text" name="subcode" id="subcode" placeholder="Input Subject code (If instructor e.g. CC101) / Designation (If Executive/staff e.g. President) " required />
            </div>
            <br></br>
            <div>
              <div class="form-group-2">
                <h3>Provide your Email Address to notify you about the status of your submitted request whether it is accepted or rejected</h3>
                <input type="email" name="email" id="email" placeholder="Email address" required /><br>
                <input type="text" name="number" id="number" placeholder="Mobile Number(Ex. +6392612345)" required /><br>
              </div>
            </div>
            <div class="form-submit">
                <input type="submit"  value="Submit Request" name="submit" id="submit" onclick="alert('Click ok to Submit Request')" class="submit" echo="submit" />
            </div>
    </form>
</div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php
		$con=mysqli_connect("localhost","root","","studentdata");
		$query=null;
		if($con == true)
		{
		}
		if (isset($_POST['submit']))
		{
			$frst=$_POST['title'];
			$scnd=$_POST['studid'];
			$ffth=$_POST['name'];
			$sxth=$_POST['subcode'];
			$svnth=$_POST['course_type'];
			$values=$_POST['email'];
			$mobile=$_POST['number'];
			$query = "INSERT INTO student(instructorID, inform, lastname, programname, yearname, emailaddress, mobile) VALUES ('$frst','$scnd','$ffth','$sxth','$svnth','$values', '$mobile')";
			$query1 = mysqli_query($con,$query);
            }
		
	?>



