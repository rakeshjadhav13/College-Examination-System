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
    echo"CONNECTION FAILED";
}
$query="select * from eaf";
$result=mysqli_query($conn,$query);



?>
<html>
    <head>
    <title>STUDENTS LIST</title>
    <link rel="stylesheet" href="studentlist.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Fredoka+One&family=Righteous&family=Secular+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <tr><th  colspan="10"><h2>STUDENTS LIST </h2></th></tr>
        <th>Name</th>
        <th>Usn</th>
        <th>Sem</th>
        <th>Challan</th>
        <th>Fees</th>
        <th>Date</th>
        <th>Mail</th>
        <th>Mobile</th>
        <th>Branch </th>
        <th>Subjects</th>
        <?php
          while($rows=mysqli_fetch_array($result))
          {
        ?><tr><td><?php echo $rows['name'];?> </td>
              <td><?php echo $rows['usn'];?> </td>
              <td><?php echo $rows['sem'];?> </td>
              <td><?php echo $rows['challan'];?> </td>
              <td><?php echo $rows['fees'];?> </td>
              <td><?php echo $rows['date'];?> </td>
              <td><?php echo $rows['mail'];?> </td>
              <td><?php echo $rows['mobile'];?> </td>
              <td><?php echo $rows['branch'];?> </td>
              <td><?php echo $rows['sub'];?> </td>
              </tr><?php 
          }
          ?>
</table>
</body>
</html>