


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body> 
<?php include './header.php'; 

// echo $header ;
 ?>


    
          <?php
include_once ("DB.php");
//include_once ("DB.php");
// define variables and set to empty values
//$name = $email =  $com_name1 = "";
//$b_name ="";
//$location="";
//$m_name="";
//$sirial="";
if(isset($_POST['save'])){ 
   $name = ($_POST["name"]);
   $nic = ($_POST["nic"]);
   $address =($_POST["address"]);
   
   $tel = ($_POST["tel"]);
   
  // $serial =($_POST["serial"]);
   //$com_name1= test_input($_POST["com_name"]);
   //$telphon=test_input($_POST["tel"]);
   $sql = "INSERT INTO employ (name,nic,address,tel) VALUES ('$name', '$nic', '$address', '$tel')";
          $res= mysqli_query($dbconn, $sql);



}

//function test_input($data) {
 //  $data = trim($data);
 //  $data = stripslashes($data);
  // $data = htmlspecialchars($data);
  // return $data;
//}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
    <div class="well">
        <h2>Technician Details</h2>
      <table>
        <tr>
            <td> Name: </td>
            <td><input type="text" name="name"value="">
            <br></td>
            
        </tr>
         <tr>
            <td>NIC: </td>
            <td><input type="text" name="nic"value="">
            <br></td>
            
        </tr>
        <tr>
            <td>Address: </td>
            <td><input type="text" name="address"value="">
            <br></td>
            
        </tr>
         <tr>
            <td> Tel: </td>
            <td><input type="text" name="tel"value="">
            <br></td>
            
        </tr>
         <br>
         
    </table>  
     <input type="submit" name="save" value="save">   
    </div>
    </form>
  </div>
</body>
</html>


