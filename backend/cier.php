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
$query="select cie.name,cie.usn,cie.mail,cie.mobile,cie.sem,cie.course1,cie.marks1,cie.course2,cie.marks2,cie.course3,cie.marks3,cie.course4,cie.marks4,cie.course5,cie.marks5
 from cie";
$result=mysqli_query($conn,$query);



?>
<html>
    <head>
        <link rel="stylesheet" href="cier.css">
        <script src="log.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Fredoka+One&family=Righteous&family=Secular+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIE MARKS LIST</title>
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
        <tr><th  colspan="15"><h2>CIE DETAILS </h2></th></tr>
        <th>Name</th>
        <th>Usn</th>
        <th>Mail</th>
        <th>Mobile</th>
        <th>Semester</th>
        <th>Course1</th>
        <th>Marks1</th>
        <th>Course2</th>
        <th>Marks2</th>
        <th>Course3</th>
        <th>Marks3</th>
        <th>Course4</th>
        <th>Marks4</th>
        <th>Course5</th>
        <th>Marks5</th>
        
        
        <?php
          while($rows=mysqli_fetch_assoc($result))
          {
        ?><tr><td><?php echo $rows['name'];?> </td>
              <td><?php echo $rows['usn'];?> </td>
              <td><address><a href="mailto:<?php echo $rows['mail'];?>"><?php echo $rows['mail'];?></a></address> </td>
              <td><?php echo $rows['mobile'];?> </td>
              <td><?php echo $rows['sem'];?> </td>
              <td><?php echo $rows['course1'];?> </td>
              <td><?php echo $rows['marks1'];?> </td>
              <td><?php echo $rows['course2'];?> </td>
              <td><?php echo $rows['marks2'];?> </td>
              <td><?php echo $rows['course3'];?> </td>
              <td><?php echo $rows['marks3'];?> </td>
              <td><?php echo $rows['course4'];?> </td>
              <td><?php echo $rows['marks4'];?> </td>
              <td><?php echo $rows['course5'];?> </td>
              <td><?php echo $rows['marks5'];?> </td>
              </tr><?php 
          }
          ?>
</table>
</body>
</html>