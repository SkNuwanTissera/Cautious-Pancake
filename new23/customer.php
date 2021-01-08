<?php

include_once ("DB.php");

//include_once ("DB2.php");
// define variables and set to empty values
//$name = $email =  $com_name1 = "";
//$b_name ="";
//$location="";
//$m_name="";
//$sirial="";
if(isset($_POST['save'])){ 
    date_default_timezone_set("Asia/colombo");
        $DN=date("Y-m-d");
   $serial = ($_POST["serial"]);
   $pro_name = ($_POST["pro_name"]);
   $b_name = ($_POST["b_name"]);
   $location = ($_POST["location"]);
  // $location =($_POST["location"]);
   $model = ($_POST["model"]);
   
   $tell =($_POST["tell"]);
   $service_time =($_POST["service_time"]);
   $tech_name="NO";
   //$com_name1= test_input($_POST["com_name"]);
   //$telphon=test_input($_POST["tel"]);
   $sql = "INSERT INTO customer(id,pro_name,bank_name,location,model,tell,service_time,service_date,tech_name) VALUES ('$serial','$pro_name','$b_name','$location','$model','$tell','$service_time','$DN','$tech_name')";
          $res= mysqli_query($dbconn, $sql);
   //$sql2 = "INSERT INTO bank_name(name)" ;       



}

//function test_input($data) {
 //  $data = trim($data);
 //  $data = stripslashes($data);
  // $data = htmlspecialchars($data);
  // return $data;
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body> 
<?php// include './header.php'; 

// echo $header ;
 ?>
<div class="container">
  <h2>login</h2>
  <div class="well">
  

<h2> Create New Customer</h2>
<form action="" method="post"enctype="multipart/form-data">
  
    <table>
         <tr>
            <td> Serial: </td>
            <td><input type="text" name="serial"value="">
            <br><br></td>
            
        </tr>
     <tr>
            <td> Product Name: </td>
            <td><input type="text" name="pro_name"value="">
            <br><br></td>
            
        </tr>
        
        <tr>
            <td>Bank Name: </td>
            <td><input type="text" name="b_name"value="">
            <br><br></td>
            
        </tr>
        
       
        
        <tr>
            <td>Location: </td>
            <td><input type="text" name="location"value="">
            <br><br></td>
            
        </tr>
         <tr>
            <td>Model: </td>
            <td><input type="text" name="model"value="">
            <br><br></td>
            
        </tr>
         <tr>
            <td>Tell: </td>
            <td><input type="text" name="tell"value="">
            <br><br></td>
            
        </tr>
        <tr>
            <td>Service Du: </td>
            <td><input type="text" name="service_time"value="">
            <br><br></td>
            
        </tr>
        
       
        
        
         
    </table> 

  
   
   <input type="submit" name="save" value="save">
  
</form>



