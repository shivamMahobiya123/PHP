<?php   
    $server = "localhost";
    $dbname= "root";
    $dbpass = "";
    $sdb = "practice";
    $conn = mysqli_connect($server,$dbname,$dbpass,$sdb);

    $sql= "SELECT * FROM data";
    $res= mysqli_query($conn,$sql);
 /* Method  One
    $datas = array();
    if(mysqli_num_rows($res)>0)
        {
            while($rows=mysqli_fetch_assoc($res))
                {
                    $datas[]=$rows;
                }
        }
  //print_r($datas);
  foreach ($datas as $data)
  {
      echo $data['text']." ";
  }
*/
//Method two
if (mysqli_num_rows($res) > 0)
    {
        while($rows=mysqli_fetch_assoc($res))
        {
            echo $rows['id']." ".$rows['text']." ";
        }
    }

?>
