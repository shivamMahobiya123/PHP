<?php
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
                if($fileSize<1000000)
                {
                    $fileNameNew = uniqid('', true).".".$fileActExt;
                    $fileDestination = 'upload/'.$fileNameNew;
                    move_uploaded_file($fileTempName,$fileDestination);
                    //header('location:uploadfile.php?uploadfile=sucess');
                }
                else {
                    echo "Your file is too Big";
                    //header('location:index.php?uploadfile=big');
                }
            }
            else{
                echo "File have some error ,please sort out ";
                //header('location:index.php?uploadfile=error');
            }
        }
        else
        {
            echo "Different format";
            //header('location:index.php?uploadfile=format');
        }
    }
?>
