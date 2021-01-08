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
<?php include './header.php'; 

 //echo $header ;
        
                include_once ("DB.php");
               $sql="select * from customer"; 
              $sql1="SELECT * FROM bank_name";
              $sql2="select* from employ";
             //$sql="SELECT * FROM customer WHERE name="";
$result=mysqli_query($dbconn,$sql1);
$result1=mysqli_query($dbconn,$sql);
$result2=mysqli_query($dbconn,$sql2);
//$result2=mysqli_query($dbconn,$sql1);


               ?> 
        <br><br><br>
    <div class="well">
        <h2>ONLINE UPDATE</h2>
        <?php
        date_default_timezone_set("Asia/colombo");
        $date=date("Y-m-d ");
        $time=  date("H:i:s");
/* @var $date type */
echo $date;
echo $time;
                     
?>
        <form action="#" method="post">
        <table>
            <tr>
             <td> Product :</td>
                <td>
                   <select name="product[]" > // Initializing Name With An Array
<option value="BDM">BDM</option>                       
                       
<option value="CRM">CRM</option>
<option value=""></option>
<option value=""></option>


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
                  <option value="<?php echo $row[2]; ?>"><?php echo $row[2] ?> </option>
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
                    <select name="tech[]"> // Initializing Name With An Array
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
<td>
<br>

</td>
</tr>
               <tr>
            <td> Remark: </td>
            <td><input type="text" name="remark"value="">
            <br></td>
            
        </tr>
        </table>
<br>
        <input type="submit" name="submit" value="SUBMIT" /> 
        <br>
       <?php
if(isset($_POST['submit'])){
    $product="";
    $customer="";
    $location="";
    $tech="";
    $resion="";
    $remark = ($_POST["remark"]);
    
    
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
    foreach ($_POST['product'] as $select)
           {
          //echo "You have selected location is :" .$select; // Displaying Selected Value
          $product=$select;
          
           }
          foreach ($_POST['customer'] as $select)
          {
    
           //echo "You have selected :" .$select; // Displaying Selected Value
           $customer=$select;

           }

          foreach ($_POST['location'] as $select)
           {
         // echo "You have selected location is :" .$select; // Displaying Selected Value
          $location=$select;
           }
           foreach ($_POST['tech'] as $select)
           {
         // echo "You have selected location is :" .$select; // Displaying Selected Value
          $tech=$select;
           }
            foreach ($_POST['resion'] as $select)
           {
          //echo "You have selected location is :" .$select; // Displaying Selected Value
          $resion=$select;
           }
           
           
           echo $product ;
           echo $customer ;
           echo $location ;
           echo $resion ;
           echo $tech;
           echo $remark ;
           echo $date ;
           
           $sql = "INSERT INTO logs(product,customer,location,resion,tech,remark,date,time) VALUES ('$product','$customer','$location','$resion','$tech','$remark','$date','$time')";
          $res= mysqli_query($dbconn, $sql); 
           //id,
}
?>
       
        </form>
<br>
<button type="button" onclick="window.location.href = 'test3.php';"class="btn btn-danger">Back</button>
    </div>
    </body>
    </html>

