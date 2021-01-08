<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2></h2>
  <div class="well">
    
<?php

include_once ("DB.php");
if(isset($_POST['save'])){
    $username= $_POST['nic'];
    $pending = "pending";
    echo "HELLO...THIS IS YOUR JOB'S ";
    echo $username; 
    $sql1="SELECT * FROM job
WHERE  name =  '" . $username . "' and job_status = '".$pending."' ORDER by ID ";
    $result=mysqli_query($dbconn,$sql1);
//if (mysqli_num_rows($result) > 0) {
while($row = $result->fetch_assoc()) {

?>


    
<br>
        <?php echo $row["id"]; ?>
        <?php echo $row["bank_name"];?><br>
        <?php echo $row["location"];?>
        <?php echo "<a href ='confirm.php?id=$row[id]'>Edite</a>" ?> <br><br>
        
       
       <?php
       // <td><?php echo $row["name"];?</td>
       //<td><?php echo $row["remark"];?</td>
       }}
       ?>
     <?php
     if(isset($_POST['save123'])){
         $pending = "pending"; 
        $sql="SELECT * FROM job
WHERE job_status = '".$pending."' ORDER by ID "; 
        $result1=mysqli_query($dbconn,$sql);
        ?>
        <table>
          <tr>
        <th>Job ID </th>
        <th>Product</th>
        <th>Customer</th>
        <th>Location</th>
        <th>Resion</th>
        <th>Tech Name</th>
        <th>Remark</th>
        <th>Date</th>
        <th>Time</th>
      </tr>
        
     <?Php   
        
//if (mysqli_num_rows($result) > 0) {
while($row = $result1->fetch_assoc()) {
   
     
     
     
     ?>
        <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["bank_name"];?></td>
        <td><?php echo $row["location"];?></td>
        <td><?php echo $row["remark"];?></td>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["job_status"];?></td>
        <td><?php echo $row["job_start_time"];?></td>
        <td><?php echo $row["job_colose_time"];?></td>
        <td><?php echo $row["caller"];?></td>
        <td><?php echo $row["day"];?></td>
        <td><?php echo $row["product"];?></td>
        <td><?php echo "<a href ='confirm.php?id=$row[id]'>Edite</a><br><br>";?></td>
    </tr>
        
        <?php
     }}
        
        ?>
      </table>
    
 
</div>
  </div>

</body>
</html>

