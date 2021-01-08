



<?php
include_once ("DB.php");


if(isset($_POST['save'])){
      
$username= $_POST['username'];
    $password= $_POST['password'];
    $admin="admin";
    $user="user";
    $officer="officer";
    
    $sql1="SELECT * FROM user
WHERE name =  '" . $username . "' AND  password ='" .  $password . "'";
$result=mysqli_query($dbconn,$sql1);
$row = mysqli_fetch_array($result);
if($row['name'] == $username and $row['password'] == $password )
     {
    //echo $row["id"];
    //echo $row["name"];
    //echo $row["password"];
    //echo $row["status"];
    if($row["status"]==$admin){
    echo "Login Sucsess ";
    echo $username;
    
    ?>
<?php  ?>
<?php  ?>
<?php  ?>
<?php  ?>
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>online records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
  <h2></h2>
  <div class="well">
      <form action="job.php"method="post" >

  <input type="text" name="nic"value="<?php echo $username; ?>">  
  
<br>
<br>
<input type="submit" name="save" value="MyJob's" />
</form>
 <form action="job.php"method="post" >

 
  

<input type="submit" name="save123" value="Pending Job" />
</form>
<br>
<button type="button" onclick="window.location.href = 'log3.php';"class="btn btn-danger">Service.....</button>
<br>
<br>
<br>
<button type="button" onclick="window.location.href = 'home.php';"class="btn btn-danger">Add new job........</button>
<br>
<br>
<button type="button" onclick="window.location.href = 'employ.php';"class="btn btn-danger">Add New Employ.....</button>
<br>
<br>
<button type="button" onclick="window.location.href = 'log2.php';"class="btn btn-danger">Viwe Visit.......</button>
<br>
<br>

<button type="button" onclick="window.location.href = 'customer.php';"class="btn btn-danger">Add new Customer</button>
  

</body>
</html>
<?php
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////
 elseif ($row["status"]==$user) {
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>online records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
  <h2></h2>
  <div class="well">
      <form action="job.php"method="post" >

  <input type="text" name="nic"value="<?php echo $username; ?>">    
<br>
<br>
<input type="submit" name="save" value="MyJob's" />


  </form>

</body>
</html>
<?php
        
    }
     
 elseif ($row["status"]==$officer) {
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>online records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
  <h2></h2>
  <div class="well">
      <form action="job.php"method="post" >

  <input type="text" name="nic"value="<?php echo $username; ?>">    
<br>
<br>
 <form action="job.php"method="post" >

 
  

<input type="submit" name="save123" value="Pending Job" />
</form>
<br>
<button type="button" onclick="window.location.href = 'log2.php';"class="btn btn-danger">Viwe Visit.......</button>
<br>
<br>
<button type="button" onclick="window.location.href = 'log3.php';"class="btn btn-danger">Service.....</button>
<br>
<br>
<button type="button" onclick="window.location.href = 'home.php';"class="btn btn-danger">Add new job</button>
<br>
<br>
<input type="submit" name="save" value="Create Job" />



  </form>

</body>
</html>
<?php
     } }else {
  ?>
   <!DOCTYPE html>
<html lang="en">
<head>
  <title>online records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
  <h2></h2>
  <div class="well">
  

<h2>Your UserName or Password is invalide.<br> click hear to <a href='index.php'>Try again </a></h2>




</body>
<?php
}     
?>
    
   




</body>

</html><?php
}else {
 // header("location:index.php"); 
 ?>
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>online records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
  <h2></h2>
  <div class="well">
  

<h2>Your UserName or Password is not .<br> click hear to <a href='index.php'>Try again </a></h2>




</body>
 <?php
}

?>
 
</body>
</html>

