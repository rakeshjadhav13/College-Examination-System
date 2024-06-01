<?php
$severname="localhost";
$username="root";
$password="";
$dbname="esm";
$conn = mysqli_connect($severname,$username,$password,$dbname);
if($conn)
{
    //echo "CONNECTION SUCCESSFULL;
}
else
{
    echo"CONNECTION FAILED";
}
  
  $name = $_POST['name'];
  $usn = $_POST['usn'];
  $mail = $_POST['mail'];
  $mobile = $_POST['mobile'];
  $sem = $_POST['sem'];
  $course1 = $_POST['course1'];
  $attendance1=$_POST['attendance1'];
  $course2 = $_POST['course2'];
  $attendance2=$_POST['attendance2'];
  $course3 = $_POST['course3'];
  $attendance3=$_POST['attendance3'];
  $course4 = $_POST['course4'];
  $attendance4=$_POST['attendance4'];
  $course5 = $_POST['course5'];
  $attendance5=$_POST['attendance5'];
  $query = "insert into cie(name,usn,mail,mobile,sem,course1,attendance1,course2,attendance2,course3,attendance3,course4,attendance4,course5,attendance5) values ('$name','$usn','$mail','$mobile','$sem','$course1','$attendance1','$course2','$attendance2','$course3','$attendance3','$course4','$attendance4','$course5','$attendance5')WHERE cie.name=";
  $run = mysqli_query($conn,$query);

  if($run)
  {
      echo"FORM SUBMITTED SUCCESSFULLY";
  }else{
      echo"FORM NOT SUBMITTED";
  }
header("location:attendance.html");
?>
