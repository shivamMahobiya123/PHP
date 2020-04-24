<?php
session_start();
include_once('dbh');
$id = $_SESSION['id'];
    if (isset($_POST['submit'])) 
    {
        
        $file = $_FILES['file'];
        print_r($file);
        $filename=$_FILES['file']['name'];
        $fileType=$_FILES['file']['type'];
        $fileSize=$_FILES['file']['size'];
        $fileError=$_FILES['file']['error'];
        $fileTempName=$_FILES['file']['tmp_name'];        
    
        $fileExt= explode(".",$filename);
        $fileActExt= strtolower(end($fileExt));
    //What file to upload
        $allowed= array("jpg", "jpeg", "png", "pdf");
        if(in_array($fileActExt,$allowed))
        {
            if($fileError === 0)
            {
                if($fileSize < 1000000)
                {
                    $fileNameNew ="profile".$id.".".$fileActExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTempName, $fileDestination);
                    $sql = "UPDATE profileimg SET status=0 WHERE userid='$id';";
                    $result=mysqli_query($conn,$sql);
                    header("location: index.php?uploadsucess");
                }
                else {
                    echo "Your file is too Big";
                        header("location: index.php?uploadfile=big");
                     }
            }
            else{
                echo "File have some error ,please sort out ";
                header("location:index.php?uploadfile=error");
            }
        }
        else
        {
            echo "Different format";
            //header('location:index.php?uploadfile=format');
        }
    }
?>