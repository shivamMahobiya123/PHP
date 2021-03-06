<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>User Data</title>

    <style>
    /* 
Generic Styling, for Desktops/Laptops 
*/
div{
    margin-right:20px;
    padding:20px;
    text-align:center;
}
table { 
  width: 70%; 
  border-collapse: collapse; 
  margin-left: 60px;
  margin-right:20px;
  text-align:center;

}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
h1 {
    text-align: center;  
  font-size: 72px;
  background: -webkit-linear-gradient(#AA0000, #E9967A);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
button
{
    align-items: center;  
    color:red;
}
.avatar {
  width: 150px;
  height: 160px;
  border-radius: 50%;
  align-items:center;
}
</style>
</head>

<body>
    <div>
    <form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
        <label for='UserID'>Enter UserID</label>
        <input type='text' name='userid'>
        <button type='submit'>Press here</button>
    </form>
    </div>

    <!-- <form action='upload.php' method='post' enctype="multipart/form-data">
        <input type='file' name='file'>
        <button type='submit' name="submit">upload</button>
    </form> -->
</body>
</html>

<?php
include("connect.php");
// define variables and set to empty values
$useridErr ="";
$userid ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["userid"])) {
      $nameErr = "Enter User Id";
    } else {
        $userid=$_POST["userid"];
        $sql = "SELECT emp_id, emp_name,emp_email,emp_phone,emp_department,emp_designation,emp_team,emp_bloodgroup FROM empverfication_table where emp_id='$userid' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<div><h1>User Details</h1></div>";
          switch($userid)
          {
              case emp01:
                        echo "<div><img src='img/employees/userimg.png' alt='Avatar' class='avatar'></div>";
                        break;              
              default:
                        echo "<div><img src='img/employees/userimg.jpg' alt='Avatar' class='avatar'></div>";
          }
          
           echo " <div>
           <table>
	<tbody>
	<tr>
        <tr>
        <th>Employee Name:</th>
        <td>" . $row["emp_name"]. "</td>
        </tr>
        
        <tr>
        <th>Desgination</th>
        <td>" . $row["emp_designation"]. "</td>
        <tr>
    </tr>
        <tr>
        <th>Employee ID</th>
        <td>" . $row["emp_id"]. "</td>
        </tr>
        <tr>
        <th>Team</th>
        <td>" . $row["emp_team"]. "</td>
        <tr>
    </tr>
    <tr>
        <tr><th>Phone</th>
        <td>" . $row["emp_phone"]."</td>
        </tr>
        <tr><th>Email</th>
        <td>" . $row["emp_email"]. "</td>
        </tr>
	</tr>
    <tr>
        <tr><th>Department</th>
        <td>" . $row["emp_department"]."</td>
        </tr>
        <tr><th>Blood Group</th>
        <td>" . $row["emp_bloodgroup"]."</td>
        </tr>
    </tr>
	</tbody>
	
</table>
</div>";

        }
        } else {
        echo "0 results";
        }
    }

        $conn->close();

    }
?>
