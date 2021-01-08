

<!DOCTYPE html>
<html lang="en">
<head>
  <title>online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body> 
<?php //include './header.php'; 

 //echo $header ;
        
                include_once ("DB.php");
                
               // if(isset($_POST['save'])){ 
  // $b_name = ($_POST["b_name"]);
   //$location =($_POST["location"]);
   //$m_name = ($_POST["m_name"]);
   
   //$serial =($_POST["serial"]);
   //$com_name1= test_input($_POST["com_name"]);
   //$telphon=test_input($_POST["tel"]);
   
   //$sql2 = "INSERT INTO bank_name(name)" ; 
   //if($b_name==678573){
       
    // header('location:home.php');
       
 
               $sql="select * from customer"; 
              $sql1="SELECT * FROM bank_name";
              $sql2="select* from user";
             //$sql="SELECT * FROM customer WHERE name="";
$result=mysqli_query($dbconn,$sql1);
$result1=mysqli_query($dbconn,$sql);
$result2=mysqli_query($dbconn,$sql2);
//$result2=mysqli_query($dbconn,$sql1);
 
        date_default_timezone_set("Asia/colombo");
        $date=date("Y-m-d-H:i:s ");
       // $time=  date("H:i:s");
/* @var $date type */

//echo $time;

               ?> 
        <br><br><br>
    <div class="well">
        <h2>ONLINE UPDATE</h2>
       
                     

        <form action="#" method="post">
        <table>
            <tr>
             <td> Product :</td>
                <td>
                   <select name="product[]" > // Initializing Name With An Array
<option value="CDM">CDM</option>                       
                       
<option value="CRM">CRM</option>
<option value="Cheqe Deposit">Cheqe Deposit</option>
<option value="ST350">ST350</option>


</select>

                </td>

              </tr>
<tr>
<td>
<br>

</td>
</tr>

            <tr>
                <td> BANK NAME :</td>
                <td>
                    <select name="customer[]"> // Initializing Name With An Array
                  <?php while($row =  mysqli_fetch_array($result)):;?>
                  <option value="<?php echo $row[1]; ?>"><?php echo $row[1] ?> </option>
                  <?php endwhile;?>
            
              </select>
                </td>
              </tr>
<tr>
<td>
<br>

</td>
</tr>
              <tr >
                <td > LOCATION :</td>
                <td>
                    <select name="location[]"> // Initializing Name With An Array
                  <?php while($row =  mysqli_fetch_array($result1)):;?>
                  <option value="<?php echo $row[3]; ?>"><?php echo $row[3] ?> </option>
                  <?php endwhile;?>
              </select>
                </td>
              </tr>
<tr>
<td>
<br>

</td>
</tr>
               <tr>
                <td> Technician :</td>
                <td>
                    <select name="name[]"> // Initializing Name With An Array
                  <?php while($row =  mysqli_fetch_array($result2)):;?>
                  <option value="<?php echo $row[1]; ?>"><?php echo $row[1] ?> </option>
                  <?php endwhile;?>
              </select>
                </td>
              </tr>
<tr>
<td>
<br>

</td>
</tr>
              <tr>
                <td> Status :</td>
                <td>
                   <select name="resion[]" > // Initializing Name With An Array
<option value="Normal">Normal</option>
<option value="Cash jam">Cash jam</option>                       
                       
<option value="Service">Service</option>
<option value="BDMupdate">BDMupdate</option>
<option value="ST150 update">ST150 update</option>
<option value="ST150 and BDMupdate">ST150 and BDMupdate"</option>
<option value="Other">Other</option>

<option value="Stack Machine">Stuck Machine</option>
</select>
                </td>
              </tr>
               <tr>
             <td> Product :</td>
                <td>
                   <select name="job_status[]" > // Initializing Name With An Array
<option value="pending">pending</option>                       
                       
<option value="job Done">Job Done</option>



</select>

                </td>

              </tr>
<tr>
<td>
<br>

</td>
</tr>
               <tr>
            <td> Remark: </td>
            <td><input type="text" name="remark"value="">
            <br></td>
            
        </tr>
        <tr>
            <td> manu time: </td>
            <td><input type="text" name="door"value="">
            <br></td>
            
        </tr>
        </table>
<br>
        <input type="submit" name="submit" value="submit" /> 
        <br>
       <?php
if(isset($_POST['submit'])){
     //include_once ("DB.php");
    echo "botton is working.......";
     
           $bank_name="";
    $location="";
    $remark =($_POST["remark"]);
    $name="";
    $job_status="";
   // $date=date("Y-m-d-H:i:s ");
    $job_colose_time="po";
    $caller="abcd";
    $day="we";
    $product="";
   // echo $date;
    
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
    foreach ($_POST['product'] as $select)
           {
          //echo "You have selected location is :" .$select; // Displaying Selected Value
          $product=$select;
          //echo $product;
          
           }
          foreach ($_POST['customer'] as $select)
          {
    
           //echo "You have selected :" .$select; // Displaying Selected Value
           $bank_name=$select;
           //echo $bank_name;

           }

          foreach ($_POST['location'] as $select)
           {
         // echo "You have selected location is :" .$select; // Displaying Selected Value
          $location=$select;
          //echo $location;
           }
           foreach ($_POST['name'] as $select)
           {
         // echo "You have selected location is :" .$select; // Displaying Selected Value
          $name=$select;
          //echo $name;
           }
            foreach ($_POST['job_status'] as $select)
           {
          //echo "You have selected location is :" .$select; // Displaying Selected Value
          $job_status=$select;
         // echo $job_status;
           }
           foreach ($_POST['resion'] as $select)
           {
          //echo "You have selected location is :" .$select; // Displaying Selected Value
          $resion=$select;
         // echo $resion;
           }
          
           echo $product ;
           echo $bank_name ;
           echo $location ;
           echo $job_status ;
           echo $name;
           echo $remark ;
           echo $date;
           echo $job_colose_time;
           echo $caller ;
           echo $day;
           //(bank_name,location,remark,name,job_status,job_start_time,job_colose_time,caller,day,product)
           
           $sql5 = "INSERT INTO job(bank_name,location,remark,name,job_status,job_start_time,job_colose_time,caller,day,product) VALUES ('".$bank_name."','".$location."','".$remark."','".$name."','".$job_status."','".$date."','".$job_colose_time."','".$caller."','".$day."','".$product."')";
         $result3= mysqli_query($dbconn,$sql5); 
           //id,
} 

?>
       
        </form>
<br>
<button type="button" onclick="window.location.href = 'test3.php';"class="btn btn-danger">Back</button>
    </div>
    </body>
    </html>
    <?php
     //}  else {
        //echo "Your Password is invalide.<br> click hear to <a href='ping.php'>Try again </a>";
      ////echo 'error';
 // }


//}
    ?>

