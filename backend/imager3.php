<?php
session_start();
$severname="localhost";
$username="root";
$password="";
$dbname="esm";

$conn = mysqli_connect($severname,$username,$password,$dbname);
if($conn)
{
   // echo"CONNECTION SUCCESSFULL";
}
else
{
    echo"CONNECTION FAILED";
}
$na =$_SESSION['mail'];
//echo $na;
$query1="select image from login1 where mail = '$na'";
$query2="select name from login1 where mail = '$na'";
$query3="select usn from login1 where mail = '$na'";
$query4="select mail from login1 where mail = '$na'";
$query6="select date from login1 where mail = '$na'";
$query5="select branch from login1 where mail = '$na'";
$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);
$result3=mysqli_query($conn,$query3);
$result4=mysqli_query($conn,$query4);
$result6=mysqli_query($conn,$query6);
$result5=mysqli_query($conn,$query5);
if ($result1->num_rows > 0) {
   
}
if ($result2->num_rows > 0) {
   
}
if ($result3->num_rows > 0) {
   
}
if ($result4->num_rows > 0) {
   
}
if ($result5->num_rows > 0) {
   
}
if ($result6->num_rows > 0) {
   
}
?>
<html>
    <head>
        <title> STUDENT PROFILE </title>
        <link rel="stylesheet" href="daprofile.css">
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nabla&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

<body>

<div class="header">
        <h1><img class="logo" src="bmsce.jpeg" alt="BMSCE LOGO">
        BMSCE EXAMINATION SYSTEM
        </h1><form  method="POST" action="logout.php">
        <a class="logout" href="login3.html">Logout</a></form>
    </div> 
   
   
</div>
<br> 
<div class="pro">
<table>

        <tr>
        <th class="r1">Profile</th>
        <?php
          while($rows=mysqli_fetch_assoc($result1))
          {
        ?><tr class="r1"><td class="r2"> <img style="margin: inherit; " src="upload/<?php echo $rows['image']; ?>" width="180vw" height="180vw"; alt=""> </td>
        </tr><?php 
          }
          ?> 
          </tr>

          <tr>
        <th class="r3">Name</th>
        <?php
          while($rows=mysqli_fetch_assoc($result2))
          {
            
        ?><td class="r4" ><?php echo $rows['name'];?></td>
        <?php 
          }
          ?> 
          </tr>
          <th class="r3">ID</th>
          <?php
          while($rows=mysqli_fetch_assoc($result3))
          {
            
        ?><td class="r4" ><?php echo $rows['usn'];?></td>
        <?php 
          }
          ?> 
          </tr>
          <tr>
          <th class="r3">Mail</th>
          <?php
          while($rows=mysqli_fetch_assoc($result4))
          {
            
        ?><td class="r4" ><?php echo $rows['mail'];?></td>
        <?php 
          }
          ?> 
          </tr>
          <tr>
        <th class="r3">DOB</th>
        <?php
          while($rows=mysqli_fetch_assoc($result6))
          {
            
        ?><td class="r4" ><?php echo $rows['date'];?></td>
        <?php 
          }
          ?> 
          </tr>
          <tr>
          <th class="r3">Branch</th>
          <?php
          while($rows=mysqli_fetch_assoc($result5))
          {
            
        ?><td class="r4" ><?php echo $rows['branch'];?></td>
        <?php 
          }
          ?> 
          </tr>
          <tr>

     
 </table>
        </div>

 <br /> 
 <div class="apc">
        <img class="bg" src="t3.png" alt="gif">
        <div class="scb">
        <ul>
            <li><a class="sb" href="studentlist1.php" target="_self">Student List</a></li>
            <li><a class="sb" href="attendence.html" target="_self">ATTENDANCE & CIE ENTRY FORM</a></li>
            <li><a class="sb" href="export.php" target="_self">DOWNLOAD THE ELIGIBILITY LIST</a></li>
        </ul>
       
        </div>

</body>
</html>