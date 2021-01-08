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
        $DN=date("Y-m-d");
        $DN_time=  date("Y-m-d H:i:s");
/* @var $date type */
echo $DN;
//echo $time;
$id =($_GET['id']);
 //echo $id;
  if(isset($_GET["id"])){
            $sql2="select * from customer where ID= '$id'"; 
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
    
   $jobid = ($_POST["id"]);
   $proname = ($_POST["pro_name"]);
   $customer1 =($_POST["bank_name"]);
   $remark =($_POST["location"]);
   $model =($_POST["model"]);
   $tell =($_POST["tell"]);
   $service =($_POST["service_time"]);
   $service_date =($_POST["service_date"]);
   $tech_name =($_POST["tech_name"]);
   
   //$date1 =($_POST["date"]);
   //$time1 =($_POST["time"]);
   //$caller =($_POST["caller"]);
   $jobstatus ="";
   $service1="Service";
  
   
   foreach ($_POST['jobstatus'] as $select)
           {
          //echo "You have selected location is :" .$select; // Displaying Selected Value
           $jobstatus=$select;
          
           }
           echo $jobstatus;
           
            $job_start_time="NO";
            $caller="no";
            $day="no";
            $job="pending";
           if($jobstatus==$service1){
             
          
   $sql = "update customer set location ='".$remark."',model='".$model."',tell='".$tell."',service_time='".$service."',service_date='".$service_date."',tech_name='".$tech_name."'where id='".$jobid."' ";
          $res= mysqli_query($dbconn, $sql);
          
           $sql5 = "INSERT INTO job(bank_name,location,remark,name,job_status,job_start_time,job_colose_time,caller,day,product) VALUES ('".$customer1."','".$remark."','".$model."','".$tech_name."','". $job."','".$DN_time."','".$job_start_time."','".$jobstatus."','".$service_date."','".$proname."')";
         $result3= mysqli_query($dbconn,$sql5); 

          echo "Your job Is Saved";  
               
           } else {
               $sql5 = "INSERT INTO job(bank_name,location,remark,name,job_status,job_start_time,job_colose_time,caller,day,product) VALUES ('".$customer1."','".$remark."','".$model."','".$tech_name."','".$job."','".$DN_time."','".$job_start_time."','".$jobstatus."','".$service_date."','".$proname."')";
         $result3= mysqli_query($dbconn,$sql5); 
         echo "Your job  saved this job is not service";
           }
     
  

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
            <td><input type="text" name ="id" value="<?php echo $row["id"]; ?>" readonly </td>
            
        </tr>
         <tr>
            <td>Model Name: </td>
            <td><input type="text" name="pro_name" value="<?php echo $row["pro_name"];?>"
            <br></td>
            
        </tr>
        <tr>
            <td>Customer Name: </td>
            <td><input type="text" name="bank_name" value="<?php echo $row["bank_name"];?>"
            <br></td>
            
        </tr>
         
        <tr>
            <td>Location: </td>
            <td><input type="text" name ="location" value="<?php echo $row["location"];?>"
            <br></td>
            
        </tr>
        <tr>
            <td>Model: </td>
            <td><input type="text" name="model" value="<?php echo $row["model"];?>"
            <br></td>
            
        </tr>
         <tr>
            <td>Tell: </td>
            <td><input type="text" name="tell" value="<?php echo $row["tell"];?>"
            <br></td>
            
        </tr>
       
         <tr>
            <td> Service Duration(Day's): </td>
            <td><input type="text" name="service_time" value="<?php echo $row["service_time"];?>"
            <br></td>
            
        </tr>
         <tr>
            <td>old Service Date : </td>
            <td><input type="text" name="date3" value="<?php echo $row["service_date"];?>"
            <br></td>
            
        </tr>
        <tr>
            <td>New Service Date : </td>
            <td><input type="text" name="service_date" value="<?php echo $DN;?>"
            <br></td>
            
        </tr>
        <tr>
            <td>Tech Name : </td>
            <td><input type="text" name="tech_name" value="<?php echo  $row["tech_name"];?>"
            <br></td>
            
        </tr>
        <tr>
             <td>Job Status :</td>
                <td>
                   <select name="jobstatus[]" > // Initializing Name With An Array
<option value="Service">Service</option>                       
                       
<option value="Visits">Visits</option>
<option value="Repair">Repair</option>
<option value=""></option>


</select>

                </td>

              </tr>
              <tr>
            <td> <input type="submit" name="save" value="save">  </form> </td>
            <td>
              
</form> 
            </td>
            
        </tr>
        
             
         <br>
         
    </table>  
      

    </div>
   
 
  </div>
  
</body>
</html>

