<?php
// export.php
if (isset($_POST["export"]) ){
    header('Content-Type:text/csv;charset=utf-8');
  header('Content-Disposition: attachment; filename=data.csv');
  
    include_once ("DB.php");
     $indate = ($_POST["indate"]);
 $outdate = ($_POST["outdate"]);

  
  $output = fopen("php://output","w");
    //$output = fopen("contacts.csv","w");
   
    fputcsv($output,array('id','product','customer','location','resion','tech','remark','date','time'));
    $quary="SELECT * FROM job
WHERE job_start_time BETWEEN '" . $indate . "' AND '" .  $outdate . "'  ORDER by ID ";
 $result=mysqli_query($dbconn,$quary);
 while ($row= mysqli_fetch_assoc($result)){
     
     fputcsv($output, $row);
 }
 fclose($output);
}

?>

