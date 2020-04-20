<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="uploadb.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>
    </form>
        <?php
        if(!isset($_GET['uploadfile']))
            {
            exit();
            }
            else{
                $uploadfCheck=$_GET['uploadfile'];
                if($uploadfCheck=="empty")
                {
                echo "<p class='text-danger'>You did not fill in all field!</p>";
                exit();
                }
                if($uploadfCheck=="big")
                {
                echo "<p class='text-danger'>You did not fill in all field!</p>";
                exit();
                }
                if($uploadfCheck=="format")
                {
                echo "<p class='text-danger'>You did not fill in all field!</p>";
                exit();
                }
                elseif($uploadfCheck=="success")
                {
                echo "<p class='text-success'>You have been signed up</p>";
                exit();
                }
            }
        ?>
</body>
</html>
