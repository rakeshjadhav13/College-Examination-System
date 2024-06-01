<html>
    <head>
        <title> UPLOAD IMAGE FORM </title>
</head>
<body>
    <form action="trial2.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" >
        <button type="submit" name="submit">UPLOAD</button>
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
    $file = $_FILES['file'];
    //print_r($file);
    $filename = $_FILES['file']['name'];
    $fileTmpname = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $fileerror = $_FILES['file']['error'];
    $filetype = $_FILES['file']['type'];

    $fileExt = explode('.',$filename);
    $fileActualExtension = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','pdf');
       if(in_array($fileActualExtension,$allowed))
       {
        if($fileerror == 0)
        {
            if($filesize <10000000)
            {
                     $fileNamenew = uniqid('',true).".".$fileActualExtension;
                     $fileDestination= 'upload/'.$fileNamenew;
                     move_uploaded_file($fileTmpname,$fileDestination);

            }
            else{
                echo"YOUR FILE IS EXCEEDING GTHE SIZE";
            }

        }else{
            echo"THERE WAS ERROR IN UPLOADING THE FILE";
        }

       }
       else{
        echo" FILE IS NOT IN THE REQIURED FORMAT";
       }
}    
?>