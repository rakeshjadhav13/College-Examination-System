<?php  
 $connect = mysqli_connect("localhost", "root", "", "esm");  
 $sql ="SELECT * from cie";
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>ELEGIBILTY LIST</title> 
           <link rel="stylesheet" href="mainr.css">  
          
           <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="ai.jpg">
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
           <br />  
           <table align="center" border="10px" style="width: 1200px; line-height=60px;">
        <tr><th  colspan="15"><h2>ELEGIBILTY LIST </h2></th></tr> 
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
                          <?php  
                          while(
                               $row = mysqli_fetch_array($result)){
                            
                          ?> 
                          <tr>  
                               <td><?php echo $row["name"];?></td>  
                               <td><?php echo $row["mail"]; ?></td>  
                               <td><?php echo $row["course1"];?></td> 
                               <td><?php echo $row["marks1"];?></td>
                                <td><?php if($row["marks1"]>30){
                                            if($row["attendance1"]>=85)
                                               echo "Eligible";
                                               else
                                               echo "Not Eligible";}
                                               else
                                               echo "Not Eligible";

                              ?></td> 
                                 
                               <td><?php echo $row["course2"]; ?></td> 
                               <td><?php echo $row["marks2"];?></td> 
                               <td><?php if($row["marks2"]>30){
                                                if($row["attendance2"]>=85)
                                               echo "Eligible";
                                               else
                                               echo "Not Eligible";}
                                               else
                                               echo "Not Eligible";
                                               ?>
                                               </td> 
                               <td><?php echo $row["course3"];?></td>  
                               <td><?php echo $row["marks3"];?></td>
                               <td><?php if($row["marks3"]>30){
                                       if($row["attendance3"]>=85)
                                               echo "Eligible";
                                               else
                                               echo "Not Eligible";}
                                               else
                                               echo "Not Eligible";
                                               
                                               ?></td> 
                               <td><?php echo $row["course4"]; ?></td> 
                               <td><?php echo $row["marks4"];?></td>  
                               <td><?php if($row["marks4"]>30){
                               if($row["attendance4"]>=85)
                                               echo "Eligible";
                                               else
                                               echo "Not Eligible";}
                                               else
                                               echo "Not Eligible";
                                               
                                               
                                               ?></td> 
                               <td><?php echo $row["course5"];?></td>  
                               <td><?php echo $row["marks5"];?></td>
                               <td><?php if($row["marks5"]>30 ){
                               if($row["attendance5"]>=85)
                                               echo "Eligible";
                                               else
                                               echo "Not Eligible";}
                                               else
                                               echo "Not Eligible";
                                               
                                               ?></td> 
                          </tr>  
                          <?php  
                               }     
                           
                          ?>  
                     </table> 
                     <form action="export.php" method="post"> 
                         <button type="submit" name="export">EXPORT</button></form>
                         

           <br />  
      </body>  
 </html>  
