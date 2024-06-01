<?php
$severname="localhost";
$Username="root";
$Password="";
$dbname="esm";
$conn = mysqli_connect($severname,$Username,$Password,$dbname);
if($conn)
{
  //echo"CONNECTION SUCCESSFULL";
}
else
{
  echo"CONNECTION FAILED";
}

  $name = $_POST['name'];
  $usn = $_POST['usn'];
  $date = $_POST['date'];
  $mail = $_POST['mail'];
  $branch = $_POST['branch'];
  $Password  = $_POST['Password'];

  $query ="INSERT INTO login1(name,usn,date,mail,brnach,Password) VALUES('$name','$usn','$date','$mail','$branch','$Password')";
  $run = mysqli_query($conn,$query);
  
  if($run)
  {
    echo"REGISTRATION IS SUCCESSFULL";
    header("location:admission.html");
  }
  else
  {
    echo"REGISTRATION WAS UNSUCCESSFULL";    
  }
  ?>