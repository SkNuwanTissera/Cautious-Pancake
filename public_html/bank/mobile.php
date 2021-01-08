<?php
 include_once ("DB.php");
// export.php
if (isset($_POST["export"]) ){
$indate = ($_POST["indate"]);
$outdate = ($_POST["outdate"]);
//echo $indate ;
//echo " to ";
//echo $outdate ;
    
header('Content-Type:text/csv;charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output","w");
   // <th>Number </th>
      //  <th>Product</th>
      //  <th>Customer</th>
      //  <th>Location</th>
       // <th>Resion</th>
       // <th>Tech Name</th>
       // <th>Remark</th>
       // <th>Date</th>
       // <th>Time</th>
    fputcsv($output,array('id','product','customer','location','resion','tech','remark','date','time'));
    $quary="SELECT * FROM logs
WHERE date BETWEEN '" . $indate . "' AND '" .  $outdate . "'  ORDER by ID ";
 $result=mysqli_query($dbconn,$quary);
 while ($row= mysqli_fetch_assoc($result)){
     
     fputcsv($output, $row);
 }
 fclose($output);
}

?>