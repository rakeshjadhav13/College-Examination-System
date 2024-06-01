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
  $marks1 = $_POST['marks1'];
  $attendance1 = $_POST['attendance1'];
  $course2 = $_POST['course2'];
  $marks2 = $_POST['marks2'];
  $attendance2 = $_POST['attendance2'];
  $course3 = $_POST['course3'];
  $marks3 = $_POST['marks3'];
  $attendance3 = $_POST['attendance3'];
  $course4 = $_POST['course4'];
  $marks4 = $_POST['marks4'];
  $attendance4 = $_POST['attendance4'];
  $course5 = $_POST['course5'];
  $marks5= $_POST['marks5'];
  $attendance5 = $_POST['attendance5'];
  $query = "insert into cie(name,usn,mail,mobile,sem,course1,marks1,attendance1,course2,marks2,attendance2,course3,marks3,attendance3,course4,marks4,attendance4,course5,marks5,attendance5) values ('$name','$usn','$mail','$mobile','$sem','$course1','$marks1','$attendance1','$course2','$marks2','$attendance2','$course3','$marks3','$attendance3','$course4','$marks4','$attendance4','$course5','$marks5','$attendance5')";
  $run =mysqli_query($conn,$query);
  if($run)
  {
    echo "<script>alert('Form Submitted Successfully.');</script>";

  }
  else{
    echo "<script>alert('Form Not Submitted.');</script>";
  }
?>
