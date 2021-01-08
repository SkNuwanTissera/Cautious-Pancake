<?php

include_once ("DB.php");
// define variables and set to empty values
//$name = $email =  $com_name1 = "";
//$b_name ="";
//$location="";
//$m_name="";
//$sirial="";
if(isset($_POST['save'])){ 
   $b_name = ($_POST["b_name"]);
   //$location =($_POST["location"]);
   //$m_name = ($_POST["m_name"]);
   
   //$serial =($_POST["serial"]);
   //$com_name1= test_input($_POST["com_name"]);
   //$telphon=test_input($_POST["tel"]);
   $sql = "INSERT INTO bank_name( name) VALUES ('$b_name')";
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
<div class="container">
  <h2>login</h2>
  <div class="well">
  

<h2> Create Customer</h2>
<form action="" method="post"enctype="multipart/form-data">
  
    <table>
     
       
       
        
       
                   
        <tr>
            <td> Name: </td>
            <td><input type="text" name="b_name"value="">
            <br></td>
            
        </tr>
        
         <br>
         
    </table> 

  
   
   <input type="submit" name="save" value="save">
  
</form>

<button type="button" onclick="window.location.href = 'index.php';"class="btn btn-danger">Back</button><br><br>

</body>
</html>
