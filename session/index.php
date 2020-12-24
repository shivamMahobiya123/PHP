<?php
 session_start();
 echo "<html>
<body>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
</body>
</html>";

 $_SESSION['username']='shivam';
 echo $_SESSION['username'];
?>
