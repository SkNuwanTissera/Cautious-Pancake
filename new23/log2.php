

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<style type="text/css">
	.container{
		margin-top: 20px;
	}
</style>

<title>KodeInfo.com : Export to excel or CSV file</title>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="panel panel-default">
				<div class="panel-heading">				
					<h3 class="panel-title" style="line-height:35px;">CDM and CRM LOGS  <div class="btn-group pull-right">
						 
						   
                                                <form action="" method="post"enctype="multipart/form-data">
      <input type="date" name="indate"value=""> <input type="date" name="outdate"value="">
  <input type="submit" name="save" value="Search">
  
  <input type="button" value="Print this page" onClick="window.print()">
  </form>
                                                <form  method="post"action="log.php"enctype="multipart/form-data">
                                                    <input type="date" name="indate"value=""> <input type="date" name="outdate"value="">
                                                       <input type="submit" name="export" value=" csv Export" >
                                                </form>                                       
						 
						</div>
					</h3>
				</div>

				<div class="panel-body">
					<form action="" method="post" id="export-form">
						<input type="hidden" value='' id='hidden-type' name='ExportType'/>
				  	</form>
	                 
	                 <table id="" class="table table-striped table-bordered">
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
		                
		                <tbody>
                                    <?php
// export.php
if (isset($_POST["export"]) ){
    include_once ("DB.php");
     $indate = ($_POST["indate"]);
 $outdate = ($_POST["outdate"]);
 echo $indate ;
echo " to ";
echo $outdate ;
    header('Content-Type:text/csv;charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output","w");
   
    fputcsv($output,array('id','bank_name','location','remark','name','job_status','job_start_time','job_colose_time','caller','day','product'));
    $quary="SELECT * FROM job
WHERE job_start_time BETWEEN '" . $indate . "' AND '" .  $outdate . "'  ORDER by ID ";
 $result=mysqli_query($dbconn,$quary);
 while ($row= mysqli_fetch_assoc($result)){
     
     fputcsv($output, $row);
 }
 fclose($output);
}

?>
      <?php
      if(isset($_POST['save'])){
                include_once ("DB.php");
                
 $indate = ($_POST["indate"]);
 $outdate = ($_POST["outdate"]);
 echo $indate ;
echo " to ";
echo $outdate ;
                
              $sql1="SELECT * FROM job
WHERE job_start_time BETWEEN '" . $indate . "' AND '" .  $outdate . "'  ORDER by id";
$result=mysqli_query($dbconn,$sql1);
//if (mysqli_num_rows($result) > 0) {
while($row = $result->fetch_assoc()) {
    
    

       ?>
                                    <?php
/////////////////////////////////////////////////////////////////////////////////////////////
//old table search option 
/////////////////////////////////////////////////////////////////////////////////////

   // echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
   // while($row = $result->fetch_assoc()) {
       // echo " <tr><td>".$row["ID"]."       </td><td>".$row["product"]." </td><td>".$row["customer"]."</td>"
//
               // . "<td>".$row["location"]."</td>  <td>".$row["resion"]."</td><td>".$row["tech"]."</td>//=     //<td>".$row["remark"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td></tr>";
  
        // <select name="picname">
   // 
 //echo "  
 //<option value=".$row["id"].">".$row["picname"]." </option>
 // "; 
   // </select>
///////////////////////////////////////////////////////////////////////////////////////////
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
    </tr>




<?php
///////////////////////////////////////////////////////////////////////////////////////////
    }
    $dbconn->close();
} 
?>
     

      
      
                
    </tbody>
  </table>
<button type="button" onclick="window.location.href = 'index.php';"class="btn btn-danger">Back</button><br><br>
</div>


</body>
</html>

