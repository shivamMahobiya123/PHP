<?php
session_start();
echo $_SESSION['username'];
session_unset();
session_destroy();
?>
