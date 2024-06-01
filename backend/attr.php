<?php
$severname="localhost";
$username="root";
$password="";
$dbname="esm";
$conn = mysqli_connect($severname,$username,$password,$dbname);
if($conn)
{
    //echo"CONNECTION SUCCESSFULL";
}
else
{
    echo"CONNECTION FAILED ";
}
$query="select cie.name,cie.usn,cie.mail,cie.mobile,cie.sem,cie.course1,cie.attendance1,cie.course2,cie.attendance2,cie.course3,cie.attendance3,cie.course4,cie.attendance4,cie.course5,cie.attendance5
 from cie";
$result=mysqli_query($conn,$query);



?>
<html>
    <head>
        <link rel="stylesheet" href="attr.css">
        <script src="log.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Fredoka+One&family=Righteous&family=Secular+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> ATTENDANCE DETAILS</title>
</head>
<body>
<div class="header">
    <h1><img class="logo" src="bmsce.jpeg" alt="BMSCE LOGO">
    BMSCE EXAMINATION SYSTEM
    </h1>
    <a class="back" href="coeprofile.html">Back</a>
    <a class="logout" href="login2.html">Logout</a>
    
</div> 


    <table >
        <tr><th  colspan="15"><h2>ATTENDANCE DETAILS </h2></th></tr>
       
        <th>Name</th>
        <th>Usn</th>
        <th>Mail</th>
        <th>Mobile</th>
        <th>Semester</th>
        <th>Course1</th>
        <th>Attendance1</th>
        <th>Course2</th>
        <th>Attendance2</th>
        <th>Course3</th>
        <th>Attendance3</th>
        <th>Course4</th>
        <th>Attendance4</th>
        <th>Course5</th>
        <th>Attendance5</th>
       
        
        
        <?php
          while($rows=mysqli_fetch_assoc($result))
          {
        ?><tr><td><?php echo $rows['name'];?> </td>
              <td><?php echo $rows['usn'];?> </td>
              <td><address><a href="mailto:<?php echo $rows['mail'];?>"><?php echo $rows['mail'];?></a></address> </td>
              <td><?php echo $rows['mobile'];?> </td>
              <td><?php echo $rows['sem'];?> </td>
              <td><?php echo $rows['course1'];?> </td>
              <td><?php echo $rows['attendance1'];?> </td>
              <td><?php echo $rows['course2'];?> </td>
              <td><?php echo $rows['attendance2'];?> </td>
              <td><?php echo $rows['course3'];?> </td>
              <td><?php echo $rows['attendance3'];?> </td>
              <td><?php echo $rows['course4'];?> </td>
              <td><?php echo $rows['attendance4'];?> </td>
              <td><?php echo $rows['course5'];?> </td>
              <td><?php echo $rows['attendance5'];?> </td>
              </tr><?php 
          }
          ?>
          
</table>


</body>
</html>