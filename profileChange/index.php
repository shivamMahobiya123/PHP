<?php
 session_start();
 include_once 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <?php
   
        $sql = "SELECT * FROM users";
        $result= mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                    $id= $row['id'];
                    $sqlImg= "SELECT* FROM profileimg WHERE userid= '$id'";
                    $resultImg = mysqli_query($conn, $sqlImg);
                       while($rowImg= mysqli_fetch_assoc($resultImg))     {
                          echo "<div class='user-container'>";
                            if( $rowImg['status'] == 0) {
                                    echo "<img src='uploads/profile".$id.".jpg?'".mt_rand().">";     
                             } else {
                                    echo "<img src='uploads/profile.jpg'>";
                                }
                                echo "<p>".$row['username']."</p>";
                           echo "</div>";
                        }       
                   }
            }
            else{
                echo "There is no user yet!";
            }

   if(isset($_SESSION['id'])) {
       if( $_SESSION['id'] == 1)
       {
           echo "You are logged in as user ";
       }
       
        echo "<form action='uploadb.php' method='post' enctype='multipart/form-data'>
            <input type='file' name='file'>
            <button type='submit' name='submit'>Upload</button>
        </form>";  
   }
   else
   {
    echo "You are not logged in";
    echo "<br><h1>SignUp Form<h1>
    <form action='signup.php' method='post'>
        <input type='text' name='first' placeholder='First' >
        <input type='text' name='last' placeholder='Last'>
        <input type='text' name='uid' placeholder='Username'>
        <input type='password' name='pwd' placeholder='Password'>
        <button type='submit' name='submitSignup'>Sign-Up</button>
    </form>
    <br>";
   }
   
    ?>
    
    
    <p>Login Form as user</p>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="submitLogin">Login-here</button>
    </form>
    <br>
    -Logout-form
    <form action="logout.php" method="POST">
        <button type="submit" name="submitLogout">Logout</button>
    </form>
    
    
</body>
</html>
