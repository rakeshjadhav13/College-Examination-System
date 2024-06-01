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
$query="select image,name,usn,mail,branch from login1 where mail = '$na'";
$result=mysqli_query($conn,$query);
if ($result->num_rows > 0) {
   
}
?>
<html>
    <head>
        <title> Student Profile </title>
         <link rel="stylesheet" href="sprofile.css" v=<?php echo time(); ?>">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="header">
        <h1><img class="logo" src="bmsce.jpeg" alt="BMSCE LOGO">
        BMSCE EXAMINATION SYSTEM
        </h1><form  method="POST" action="logout.php">
        <a class="logout" href="login1.html">Logout</a></form>
    </div> 
   
   
</div>
<br> 
<table >
  
        <tr >
        <th >Profile</th>
        <?php
          while($rows=mysqli_fetch_assoc($result))
          {
        ?><tr><td> <img style="margin: inherit;" src="upload/<?php echo $rows['image']; ?>" width="150vw" height="150vw" alt=""> </td>
        </tr><?php 
          }
          ?> 
       
        </tr>
      
          <tr>
        <th>Name</th>  
       <td> <?php
        $sql1 = "select name from login1  ";
        $query1 = mysqli_query($conn,$sql1);
          while($rows=mysqli_fetch_assoc($query1))
          {
             $name = $rows['name'];
             echo $name;
          }
          ?> 
          </td>
       
        </tr>
        <tr>
        <th>Usn</th>
        <td> <?php
        $sql1 = "select usn from login1";
        $query1 = mysqli_query($conn,$sql1);
          while($rows=mysqli_fetch_assoc($query1))
          {
            $usn = $rows['usn'];
            echo $usn;
          }
          ?> 
          </td>
       
        </tr>
        <tr>
        <th>Mail</th>
        <td> <?php
        $sql1 = "select mail from  login1";
        $query1 = mysqli_query($conn,$sql1);
          while($rows=mysqli_fetch_assoc($query1))
          {
             $mail = $rows['mail'];
             echo $mail;
          }
          ?> 
          </td>
       
        </tr>
        <tr>
        <th>Branch</th>
        <td> <?php
        $sql1 = "select branch from login1";
        $query1 = mysqli_query($conn,$sql1);
          while($rows=mysqli_fetch_assoc($query1))
          {
              $branch = $rows['branch'];
              echo $branch;
          }
          ?> 
          </td>
       
        </tr>
       
</table>
<br /> 
<div class ="spbc">
    
    <div class="spc">
    <ul>
        <li><a class="sb" href="https://bmsce.ac.in/home/Computer-Science-and-Engineering-Syllabus" target="_self">Course  Details</a></li>
        
        <li> <a class="sb" href="exam_applicationform.html" target="blank">Exam  Application</a></li>
         


    </ul>

    </div>
</body>
</html>