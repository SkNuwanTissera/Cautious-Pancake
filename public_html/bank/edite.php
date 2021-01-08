<?php

include_once ("DB.php");
// define variables and set to empty values
//$name = $email =  $com_name1 = "";
//$b_name ="";
//$location="";
//$m_name="";
//$sirial="";
if(isset($_POST['save'])){
     $color1="";
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
          foreach ($_POST['Color'] as $select)
          {
    
           //echo "You have selected :" .$select; // Displaying Selected Value
           $color1=$select;

           }
   //$b_name = ($_POST["b_name"]);
   $location =($_POST["location"]);
   $m_name = ($_POST["m_name"]);
   
   $serial =($_POST["serial"]);
   //$com_name1= test_input($_POST["com_name"]);
   //$telphon=test_input($_POST["tel"]);
   $sql = "INSERT INTO customer (b_name,location,m_name,serial) VALUES ('$color1', '$location', '$m_name', '$serial')";
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
<?php
                include_once ("DB.php");
              // $sql="select * from customer"; 
              $sql1="SELECT * FROM bank_name";
             //$sql="SELECT * FROM customer WHERE name="";
$result=mysqli_query($dbconn,$sql1);
//$result1=mysqli_query($dbconn,$sql);
//$result2=mysqli_query($dbconn,$sql1);


               ?> 
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

 //echo $header ;
 ?>
<div class="container">
  <h2>login</h2>
  <div class="well">
  

<h2>Customer Details</h2>
<form action="" method="post"enctype="multipart/form-data">
  
    <table>
     
       
       
        
       
                   
        <tr>
            <td> Name: </td>
            <td> <select name="Color[]"> // Initializing Name With An Array
                  <?php while($row =  mysqli_fetch_array($result)):;?>
                  <option value="<?php echo $row[1]; ?>"><?php echo $row[1] ?> </option>
                  <?php endwhile;?>
            
              </select>
                <?php 
           ?>
            <br></td>
            
        </tr>
         <tr>
            <td>Location: </td>
            <td><input type="text" name="location"value="">
            <br></td>
            
        </tr>
        <tr>
            <td>Machine: </td>
            <td><input type="text" name="m_name"value="">
            <br></td>
            
        </tr>
         <tr>
            <td> Serial: </td>
            <td><input type="text" name="serial"value="">
            <br></td>
            
        </tr>
         <br>
         
    </table> 

  
   
   <input type="submit" name="save" value="Get Selected Values">
  
</form>



</body>
</html>
