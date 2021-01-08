
<?php
 include_once ("DB.php");
 $sql2="select * from customer"; 
 $result1=mysqli_query($dbconn,$sql2);
 

          
?>
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
					<h3 class="panel-title" style="line-height:35px;">CDM and CRM  SERVICE LOG  <div class="btn-group pull-right">
						 
						   
                                                <form action="" method="post"enctype="multipart/form-data">
    <select name="bank[]" > // Initializing Name With An Array
       
<option value="Commercial Bank">Commercial Bank</option>                       
                       
<option value="HNB">HNB</option>
<option value="Seylan Bank">Seylan Bank</option>
<option value="Sampath Bank">Sampath Bank</option>
<option value="Assetline">Assetline</option>
<option value="PB">PB</option>
<option value="NTB">NTB</option>
<option value="NDB">NDB</option>
<option value="LB">LB</option>


   </select>
 <select name="location[]"> 
                  <?php while($row =  mysqli_fetch_array($result1)):;?>
                  <option value="<?php echo $row[3]; ?>"><?php echo $row[3] ?> </option>
                  <?php endwhile;?>
            
              </select>
                                                       <input type="submit" name="save" value="Search">
                                                       <input type="submit" name="save123" value="Search All">
  
                                                        <input type="button" value="Print this page" onClick="window.print()">
                                                           </form>
                                                <form  method="post"action="log.php"enctype="multipart/form-data">
                                                    <input type="date" name="indate"value=""> <input type="date" name="outdate"value="">
                                                       <input type="submit" name="export" value=" csv Export" >
                                                </form>  
                                                 <form  method="post"action="log.php"enctype="multipart/form-data">
                                                     <input type="submit" name="save123" value="Search All">
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
        <th>Serial Number </th>
        <th>Product</th>
        <th>Customer</th>
        <th>Location</th>
        <th>Modle</th>
        <th>Contact Number</th>
        <th>Flowing Date</th>
        <th>Next Service day's</th>
        <th>Service Date</th>
        <th></th>
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
                
 //$indate = ($_POST["indate"]);
 //$outdate = ($_POST["outdate"]);
 //echo $indate ;
//echo " to ";
//echo $outdate ;
// date_default_timezone_set("Asia/colombo");
 //   $DN =  date("Y-m-d");
  $bank ="";
   $location="";
   
   foreach ($_POST['bank'] as $select)
           {
          //echo "You have selected location is :" .$select; // Displaying Selected Value
           $bank=$select;
          
           }  
            foreach ($_POST['location'] as $select)
           {
         // echo "You have selected location is :" .$select; // Displaying Selected Value
          $location=$select;
          //echo $location;
           }
             // $sql1="SELECT * FROM customer
  // ";
$param1="Commercial Bank";
$param2="VAVUNIYA BRANCH";
//SELECT * FROM Customers WHERE City='Berlin' OR City='M���nchen';

    $sql1="SELECT * FROM customer WHERE bank_name='" .$bank. "'and location= '".$location."'ORDER by ID";          
$result=mysqli_query($dbconn,$sql1);
//if (mysqli_num_rows($result) > 0) {
while($row = $result->fetch_assoc()) {
   date_default_timezone_set("Asia/colombo");
   // $DN = date_create("Y-m-d");
     $DN =  date("Y-m-d");
       // echo $row["service_date"];
        $rt=$row["service_date"];
       //echo $DN;
       // echo $rt; 
//$date1 = date_create($DN);
$start = strtotime($rt);
$end = strtotime($DN);

$days_between = ceil(abs($end - $start)/86400);


 echo $days_between;
 echo $rt;

//echo $days_between;

        
    
     //echo $row["service_time"];

       ?>
                                    <?php

                                    if($row["service_time"]>$days_between){
                                       
?>

 <tr style="color: black; background: buttonface;">
        <td><?php echo $row["id"]; ?></td>a
         <td><?php echo $row["pro_name"]; ?></td>
        <td><?php echo $row["bank_name"];?></td>
        <td><?php echo $row["location"];?></td>
        <td><?php echo $row["model"];?></td>
        <td><?php echo $row["tell"];?></td>
         <td><?php echo $days_between;?></td>
        <td><?php echo $row["service_time"];?></td>
        <td><?php echo $row["service_date"];?></td>
        <td><?php echo "<a href ='log4.php?id=$row[id]'>Edit</a>" ?><td> <br>
        
    </tr>
<?php
}
?>
 <?php

                                    if($row["service_time"]==$days_between){
?>

 <tr style="color: black; background: blue;">
        <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["pro_name"]; ?></td>
        <td><?php echo $row["bank_name"];?></td>
        <td><?php echo $row["location"];?></td>
        <td><?php echo $row["model"];?></td>
        <td><?php echo $row["tell"];?></td>
        <td><?php echo $days_between;?></td>
        <td><?php echo $row["service_time"];?></td>
        <td><?php echo $row["service_date"];?></td>
         <td><?php echo "<a href ='log4.php?id=$row[id]'>Edit</a>" ?><td> <br>
        
    </tr>
<?php
}
?>
     <?php

                                    if($row["service_time"]<$days_between){
?>

 <tr style="color: black; background: red;">
        <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["pro_name"]; ?></td>
        <td><?php echo $row["bank_name"];?></td>
        <td><?php echo $row["location"];?></td>
        <td><?php echo $row["model"];?></td>
        <td><?php echo $row["tell"];?></td>
        <td><?php echo $days_between;?></td>
        <td><?php echo $row["service_time"];?></td>
        <td><?php echo $row["service_date"];?></td>
        <td><?php echo "<a href ='log4.php?id=$row[id]'>Edit </a>" ?><td> <br>
        
    </tr>
<?php
}
?>

<?php
//////////////////////////////////////////////////////////////////////////////////////////

                                    }
                                    
                                    
///////////////////////////////////////////////////////////////////////////////////////////
    
    $dbconn->close();
} 
?>
    <?php
      if(isset($_POST['save123'])){
                include_once ("DB.php");
                
 //$indate = ($_POST["indate"]);
 //$outdate = ($_POST["outdate"]);
 //echo $indate ;
//echo " to ";
//echo $outdate ;
// date_default_timezone_set("Asia/colombo");
 //   $DN =  date("Y-m-d");
  $bank ="";
   $location="";
   
   foreach ($_POST['bank'] as $select)
           {
          //echo "You have selected location is :" .$select; // Displaying Selected Value
           $bank=$select;
          
           }  
            foreach ($_POST['location'] as $select)
           {
         // echo "You have selected location is :" .$select; // Displaying Selected Value
          $location=$select;
          //echo $location;
           }
             // $sql1="SELECT * FROM customer
  // ";
$param1="Commercial Bank";
$param2="VAVUNIYA BRANCH";
//SELECT * FROM Customers WHERE City='Berlin' OR City='M���nchen';

    $sql1="SELECT * FROM customer WHERE bank_name='" .$bank. "'";          
$result=mysqli_query($dbconn,$sql1);
//if (mysqli_num_rows($result) > 0) {
while($row = $result->fetch_assoc()) {
   date_default_timezone_set("Asia/colombo");
   // $DN = date_create("Y-m-d");
     $DN =  date("Y-m-d");
       // echo $row["service_date"];
        $rt=$row["service_date"];
       //echo $DN;
       // echo $rt; 
//$date1 = date_create($DN);
$start = strtotime($rt);
$end = strtotime($DN);

$days_between = ceil(abs($end - $start)/86400);
//echo $days_between;
//echo $days_between;


    
     //echo $row["service_time"];

       ?>
                                    <?php

                                    if($row["service_time"]>$days_between){
?>

 <tr style="color: black; background: buttonface;">
        <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["pro_name"]; ?></td>
        <td><?php echo $row["bank_name"];?></td>
        <td><?php echo $row["location"];?></td>
        <td><?php echo $row["model"];?></td>
        <td><?php echo $row["tell"];?></td>
        <td><?php echo $days_between;?></td>
        <td><?php echo $row["service_time"];?></td>
        <td><?php echo $row["service_date"];?></td>
        <td><?php echo "<a href ='log4.php?id=$row[id]'>Edit</a>" ?><td> <br>
        
    </tr>
<?php
}
?>
 <?php

                                    if($row["service_time"]==$days_between){
?>

 <tr style="color: black; background: blue;">
        <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["pro_name"]; ?></td>
        <td><?php echo $row["bank_name"];?></td>
        <td><?php echo $row["location"];?></td>
        <td><?php echo $row["model"];?></td>
        <td><?php echo $row["tell"];?></td>
        <td><?php echo $days_between;?></td>
        <td><?php echo $row["service_time"];?></td>
        <td><?php echo $row["service_date"];?></td>
         <td><?php echo "<a href ='log4.php?id=$row[id]'>Edit</a>" ?><td> <br>
        
    </tr>
<?php
}
?>
     <?php

                                    if($row["service_time"]<$days_between){
?>

 <tr style="color: black; background: red;">
        <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["pro_name"]; ?></td>
        <td><?php echo $row["bank_name"];?></td>
        <td><?php echo $row["location"];?></td>
        <td><?php echo $row["model"];?></td>
        <td><?php echo $row["tell"];?></td>
        <td><?php echo $days_between;?></td>
        <td><?php echo $row["service_time"];?></td>
        <td><?php echo $row["service_date"];?></td>
        <td><?php echo "<a href ='log4.php?id=$row[id]'>Edit </a>" ?><td> <br>
        
    </tr>
<?php
}
?>

<?php
//////////////////////////////////////////////////////////////////////////////////////////

                                    }
                                    
                                    
///////////////////////////////////////////////////////////////////////////////////////////
    
    $dbconn->close();
} 
?>
     

      
      
                
    </tbody>
  </table>
<button type="button" onclick="window.location.href = 'index.php';"class="btn btn-danger">Back</button><br><br>
</div>


</body>
</html>



