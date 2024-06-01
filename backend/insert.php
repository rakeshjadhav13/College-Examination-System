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
    $sem = $_POST['sem']; 
    $challan = $_POST['challan'];
    $fees = $_POST['fees'];
    $date = $_POST['date'];
    $mobile= $_POST['mobile'];
    $mail=$_POST['mail'];
    $branch=$_POST['branch']; 
    $chk="";
    $sub = $_POST['sub'];
    $chk = implode(',',$sub);
    $query = "insert into eaf(name,usn,sem,sub,challan,fees,date,mobile,mail,branch) values('$name','$usn','$sem','$chk',' $challan','$fees','$date','$mobile','$mail','$branch')";
    $run = mysqli_query($conn,$query);
      
     if($run)
 {
        echo"FORM SUBMITTED SUCCESFULLY";
        header("location:exam_applicationform.html");
}
    else
     {
        echo"FORM NOT SUBMITTED";
     }
    

   



?>