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
<?php
include_once ("DB.php");
//include './recodes.php'; 
date_default_timezone_set("Asia/colombo");
        $DN=date("Y-m-d h:i:sa");
        //$time=  date("H:i:s");
/* @var $date type */
echo $DN;
//echo $time;
$id =($_GET['id']);
 //echo $id;
  if(isset($_GET["id"])){
            $sql2="select * from job where ID= '$id'"; 
             $result=mysqli_query($dbconn,$sql2);
             if($row= mysqli_fetch_assoc($result)){
                 //num = ($row['picname']);
                 ?>
    
    <tr>
        <td><?php// echo $row["ID"]; ?></td>
        <td><?php// echo $row["product"];?></td>
        <td><?php// echo $row["customer"];?></td>
        <td><?php// echo $row["location"];?></td>
        <td><?php// echo $row["resion"];?></td>
        <td><?php// echo $row["tech"];?></td>
        <td><?php// echo $row["remark"];?></td>
        <td><?php// echo $row["date"];?></td>
        <td><?php// echo $row["time"];?></td>
        <td><?php //echo "<a href ='recodes.php?id=$row[ID]'>Edite</a>" ?> </td>
    </tr>
    <?php
             // <editor-fold defaultstate="collapsed" desc="comment">
          //   echo "
           //     <table class='table table-striped'>
    
   // <tbody>
    
    //  <tr>
      
    //    <td><br><img style='width: 350px;height:300px' src ='uploads/$row[pic]' ></td>
    //    <td> PRODUCT NAME " . $row["picname"] . "<br>DESCRIPTION " . $row["picdescription"] . "</td>
        
    //  </tr>
     
     
 //   </tbody>
 // </table>
 // "; // </editor-fold>
                      }
         }  else {
            // header("location:index.php");
}


 ?>


    
          <?php
include_once ("DB.php");
//include_once ("DB.php");
// define variables and set to empty values
//$name = $email =  $com_name1 = "";
//$b_name ="";
//$location="";
//$m_name="";
//$sirial="";
if(isset($_POST['save'])){ 
    
   $jobid = ($_POST["Jobid"]);
   $proname = ($_POST["cusname"]);
   $customer1 =($_POST["location"]);
   $remark =($_POST["remark"]);
   $name1 =($_POST["EngID"]);
   
   
   $date1 =($_POST["date"]);
   $time1 =($_POST["time"]);
   //$caller =($_POST["caller"]);
   $jobstatus ="";
  
   
   foreach ($_POST['jobstatus'] as $select)
           {
          //echo "You have selected location is :" .$select; // Displaying Selected Value
           $jobstatus=$select;
          
           }
           
   
  // $tel = ($_POST["tel"]);
   
  // $serial =($_POST["serial"]);
   //$com_name1= test_input($_POST["com_name"]);
   //$telphon=test_input($_POST["tel"]);
   $sql = "update job set remark ='".$remark."',job_colose_time='".$time1."',job_status='".$jobstatus."'where id='".$jobid."' ";
          $res= mysqli_query($dbconn, $sql);

          echo "Your job Is Saved";
          // echo "<a href ='job.php'>
          echo "<a href ='job.php'>Edite</a>";

 }

//function test_input($data) {
 //  $data = trim($data);
 //  $data = stripslashes($data);
  // $data = htmlspecialchars($data);
  // return $data;
//}
//<?php// echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
?>


    <form action="#" method="post">
        
    <div class="well">
        <h2>Visit's Details</h2>
      <table>
        <tr>
            <td> JOB ID: </td>
            <td><input type="text" name ="Jobid" value="<?php echo $row["id"]; ?>" readonly </td>
            
        </tr>
         <tr>
            <td>Customer Name: </td>
            <td><input type="text" name="cusname" value="<?php echo $row["bank_name"];?>"
            <br></td>
            
        </tr>
        <tr>
            <td>Location: </td>
            <td><input type="text" name="location" value="<?php echo $row["location"];?>"
            <br></td>
            
        </tr>
         
        <tr>
            <td> Remark: </td>
            <td><input type="text" name ="remark" value="<?php echo $row["remark"];?>"
            <br></td>
            
        </tr>
        <tr>
            <td> Visitor Name: </td>
            <td><input type="text" name="EngID" value="<?php echo $row["name"];?>"
            <br></td>
            
        </tr>
       
         <tr>
            <td> Start Date: </td>
            <td><input type="text" name="date" value="<?php echo $row["job_start_time"];?>"
            <br></td>
            
        </tr>
         <tr>
            <td> Close Date : </td>
            <td><input type="text" name="time" value="<?php echo $DN;?>"
            <br></td>
            
        </tr>
        <tr>
             <td>Job Status :</td>
                <td>
                   <select name="jobstatus[]" > // Initializing Name With An Array
<option value="Job Done">Job Done</option>                       
                       
<option value="Pending">Pending</option>
<option value=""></option>
<option value=""></option>


</select>

                </td>

              </tr>
              <tr>
            <td> <input type="submit" name="save" value="save">  </form> </td>
            <td>
               <form action="job.php"method="post" >

  <input type="text" name="nic"value="<?php  $row["name"]; ?>">  
  

<input type="submit" name="save" value="Back" />
</form> 
 <form action="job.php"method="post" >

 
  

<input type="submit" name="save123" value="Pending Job" />
</form>
            </td>
            
        </tr>
        
             
         <br>
         
    </table>  
      

    </div>
   
 
  </div>
  
</body>
</html>
