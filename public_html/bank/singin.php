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



    <form action="singup.php" method="post"enctype="multipart/form-data">
        
    <div class="well">
        <h2>SINGIN </h2>
      <table>
        <tr>
            <td> UserName: </td>
            <td><input type="text" name="username"value="">
            <br></td>
            
        </tr>
         <tr>
            <td>NIC: </td>
            <td><input type="text" name="nic"value="">
            <br></td>
            
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password"value="">
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

