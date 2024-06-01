<?php
session_start();
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
if (isset($_POST["submit"])) {
    $name = $_POST['name'];

    $usn = $_POST['usn'];
    $_SESSION['name']=$name;
    $date=$_POST['date'];
    $mail = $_POST['mail'];
    $branch = $_POST['branch'];
    $password= $_POST['Password'];
    $_SESSION['mail']=$mail;
         
        $photo_name = mysqli_real_escape_string($conn, $_FILES["photo"]["name"]);
        $photo_tmp_name = $_FILES["photo"]["tmp_name"];
        $photo_size = $_FILES["photo"]["size"];
        $photo_new_name = rand() . $photo_name;
        //echo $photo_new_name;
        $_SESSION['image'] = $photo_new_name;

        if ($photo_size > 5242880) {
            echo "<script>alert('Photo is very big. Maximum photo uploading size is 5MB.');</script>";
        } else {
           // $sql = "UPDATE users SET name='$name', password='$password', photo='$photo_new_name' WHERE userid='{$_SESSION["userid"]}'";
            $sql = "INSERT into login3(image,name,usn,date,mail,branch,password) VALUES ('$photo_new_name','$name',' $usn','$date','$mail','$branch','$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Profile Created Successfully.');</script>";
                move_uploaded_file($photo_tmp_name, "upload1/" . $photo_new_name);
                header("location:login3.html");
            } else {
                echo "<script>alert('Profile can not Updated.');</script>";
                echo  $conn->error;
            }
        }
        

    }

?>  