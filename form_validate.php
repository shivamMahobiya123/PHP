<html>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation</title>
    <style>
        .error
        {
            color:rgb(255, 0, 106);
        }
    </style>
    <?php
    $nameE=$emailE=$genderE="";
    $name=$email=$gender="";
   if($_SERVER['REQUEST_METHOD']=="POST")
       { 
           if(empty($_POST["name"]))
           {
               $nameE="name is required";
           }else{
               $name=test_input($_POST['name']);
           }

           if(empty($_POST['email']))
           {
               $emailE="Email is required";
           }else{
               $email=test_input($_POST['email']);
           }

           if(empty($_POST['gender']))
           {
               $genderE="Gender is required";
           }else{
               $gender=test_input($_POST['gender']);
           }
       }
    function test_input($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
   ?>
</head>
<body>
    <span class="error">* required field</span>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        Name:<input type="text" name="name" ><?php echo $nameE;?><br>
        Email:<input type="gender" name="email" ><?php echo $emailE;?><br>
        Gender:Male<input type="radio" name="gender" value="male">
        Female<input type="radio" name="gender" value="female"><?php echo $genderE?>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
 <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
?>
</body>
</html>
