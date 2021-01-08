


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
<?php //include './header.php'; 

// echo $header ;
 ?>


    
          <?php

//include_once ("DB.php");
// define variables and set to empty values
//$name = $email =  $com_name1 = "";
//$b_name ="";
//$location="";
//$m_name="";
//$sirial="";
if(isset($_POST['save'])){ 
    include_once ("DB.php");
   $name = ($_POST["name"]);
   $password = ($_POST["password"]);
   $status ="";
    foreach ($_POST['status'] as $select)
           {
          //echo "You have selected location is :" .$select; // Displaying Selected Value
           $status=$select;
          
           }
   
   
  // $serial =($_POST["serial"]);
   //$com_name1= test_input($_POST["com_name"]);
   //$telphon=test_input($_POST["tel"]);
   $sql = "INSERT INTO user(name,password,status) VALUES ('".$name."', '".$password."', '".$status."')";
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
            <td>Password: </td>
            <td><input type="password" name="password"value="">
            <br></td>
            
        </tr>
        <tr>
            <td>Status: </td>
            <td> <select name="status[]" > // Initializing Name With An Array
<option value="admin">admin</option>                       
                       
<option value="officer">officer</option>
<option value="user">user</option>
<option value="viwer">viwer</option>


</select>
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




