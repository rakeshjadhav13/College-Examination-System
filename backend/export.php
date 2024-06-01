<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "esm");
$output = '';

 $query = "SELECT  * FROM cie  ";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
      
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th>NAME</th>  
                    <th>CLG MAIL</th>  
                    <th>COURSE1</th> 
                    <th> MARKS 1</th>
                    <th>ELEGIBILTY</th> 
                    <th>Course2</th>  
                    <th> MARKS 2</th>
                    <th>ELEGIBILTY</th> 
                    <th>Course3</th>  
                    <th> MARKS 3</th>
                    <th>ELEGIBILTY</th> 
                    <th>Course4</th>
                    <th> MARKS 4</th>
                    <th>ELEGIBILTY</th> 
                    <th>Course5</th>
                    <th> MARKS 5</th>
                    <th>ELEGIBILTY</th> 
                            </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
        if($row['marks1']>30 && $row['attendance1']>85)
        {
                $m1 = "Eligible";
        }
        else
        $m1 = "Not Eligible";
        if($row['marks2']>30 && $row['attendance2']>85)
        {
                $m2 = "Eligible";
        }
        else
        $m2 = "Not Eligible";
        if($row['marks3']>30 && $row['attendance3']>85)
        {
                $m3 = "Eligible";
        }
        else
        $m3 = "Not Eligible";
        if($row['marks4']>30 && $row['attendance4']>85 )
        {
                $m4 = "Eligible";
        }
        else
        $m4 = "Not Eligible";
        if($row['marks5']>30 && $row['attendance5']>85)
        {
                $m5 = "Eligible";
        }
        else
        $m5 = "Not Eligible";
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["mail"].'</td>  
                         <td>'.$row["course1"].'</td>  
                          <td>'.$row["marks1"].'</td>
                          <td>'.$m1.'</td>
                            <td>'.$row["course2"].'</td>
                            <td>'.$row["marks2"].'</td> 
                            <td>'.$m2.'</td>
                            <td>'.$row["course3"].'</td> 
                            <td>'.$row["marks3"].'</td> 
                            <td>'.$m3.'</td>
                            <td>'.$row["course4"].'</td> 
                            <td>'.$row["marks4"].'</td>
                            <td>'.$m4.'</td>
                            <td>'.$row["course5"].'</td> 
                            <td>'.$row["marks5"].'</td> 
                            <td>'.$m5.'</td>

                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=elegibility.xls');
  echo $output;
 }
 else{
         echo'<html>
         <head>
         <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Fredoka+One&family=Righteous&family=Secular+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="see.css">
         </head>
         <body>
         <div class="header">
    <h1><img class="logo" src="bmsce.jpeg" alt="BMSCE LOGO">
    BMSCE EXAMINATION SYSTEM
    </h1>
    <a class="back" href="daprofile.html">Back</a>
    <a class="logout" href="login3.html">Logout</a>
    
</div> 
         <p> THE ELEGIBILTY LIST IS NOT GENERATED  </p>
         </body>
         </html>';
 }

?>



