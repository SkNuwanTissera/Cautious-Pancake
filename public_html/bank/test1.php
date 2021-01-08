<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

    
   // <?php
   // $dt=new DateTime($X);
   // $date=$dt->format('d/m/y');
    ?>
    
<div class="container">
  <h2>ONLINE RECORDS</h2>
  <p>24*7 ONLINE SUPPORT FOR URGENT ISSUES</p>
  <form action="" method="post"enctype="multipart/form-data">
      <input type="date" name="indate"value=""> <input type="date" name="outdate"value="">
  <input type="submit" name="save" value="save">
  </form>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Number </th>
        <th>Product</th>
        <th>Customer</th>
        <th>Location</th>
        <th>Resion</th>
        <th>Tech Name</th>
        <th>Remark</th>
        <th>Date</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if(isset($_POST['save'])){
                include_once ("DB.php");
                
 $indate = ($_POST["indate"]);
 $outdate = ($_POST["outdate"]);
 echo $indate;
                
              $sql1="SELECT * FROM logs
WHERE date BETWEEN '" . $indate . "' AND '" . $outdate . "'  ORDER by ID DESC";
$result=mysqli_query($dbconn,$sql1);
//if (mysqli_num_rows($result) > 0) {
   // echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <tr><td>".$row["ID"]."       </td><td>".$row["product"]." </td><td>".$row["customer"]."</td>"
                . "<td>".$row["location"]."</td>  <td>".$row["resion"]."</td><td>".$row["tech"]."</td><td>".$row["remark"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td></tr>";
  
        // <select name="picname">
   // 
 //echo "  
 //<option value=".$row["id"].">".$row["picname"]." </option>
 // "; 
   // </select>
    }
    $dbconn->close();
} //else 
    //echo "0 results";
     // }

      
      
                ?>
    </tbody>
  </table>
</div>

</body>
</html>