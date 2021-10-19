<?php
 $dbhost = "localhost:3307";
 $dbuser = "root";
 $dbpass = "";
 $db = "aiub"; 
 $conn = new mysqli($dbhost,  $dbuser, $dbpass,  $db); 
 if ($conn->connect_error)
  { 
      die("Connection failed: " . $conn->connect_error);
 } 

 if (isset($_POST['submit']))
 {

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mob_no=$_POST['phone'];
    $Dob=$_POST['dob'];
    $HSC_r=$_POST['hscR'];
    $SSC_r=$_POST['sscR'];
    $c_enroll=$_POST['course'];
    $y_enroll=$_POST['yeare'];
    $s_enroll=$_POST['session'];

 }
    

 $sql = "INSERT INTO new_students (f_name, l_name,e_mail,gender_,mobile_no,Dob,hsc_result,SSC_result,course_enroll,year_enroll,session_enroll) VALUES ($fname,$lname, $email,$gender$mob_no,$Dob,$HSC_r, $c_enrol,$y_enroll,  $s_enroll )";
  $res = $conn->query($qry);

  if($res)
   { 
       echo “new record inserted";
    }
   else

     echo "error occurred";
     

$conn->close();
 ?>