<?php 
session_start();
if(isset($_POST['submitLogin']))
{
    $_SESSION['id'] = 0;
    header("Location: index.php");
}
?>