
<?php

$host="localhost"; 
$Username="root"; 
$Password=""; 
$db_name="esm"; 
$tbl_name="login3"; 
$conn =mysqli_connect("$host", "$Username", "$Password")or die("cannot connect"); 
mysqli_select_db($conn,"$db_name")or die("cannot select DB");
// Username and Password sent from form 
$un= $_POST["Username"];

$pwd=$_POST["Password"]; 
// To protect MySQL injection (more detail about MySQL injection)
$un = stripslashes($un);
$pwd = stripslashes($pwd);
$un = mysqli_real_escape_string($conn,$un);
$pwd = mysqli_real_escape_string($conn,$pwd);
$sql="SELECT * FROM $tbl_name WHERE Username='$un' and Password='$pwd' ";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count==1){
header("location:daprofile.html");
}
else {
header("location:login3.html");
}
?>
