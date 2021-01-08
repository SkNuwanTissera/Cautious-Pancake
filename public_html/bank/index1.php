
?><!DOCTYPE html>
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
<?php include './header.php'; 

 echo $header ;
// 
 ?>
<div class="container">
  <h2>login</h2>
  <div class="well">
  

<h2>sing up</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table>
        <?php
date_default_timezone_set("Asia/colombo");
echo "The time is " . date("Y-m-d h:i:sa");
?>
        <tr>
            <td>BANK NAME: </td>
            <td>
            <select name="b_name"> 
                        <option value="Commercial Bank ">Commercial Bank </option>
                        <option value="Saylan Bank">Saylan Bank</option>
                        <option value="Assetlin">Assetlin </option>
                        <option value="HNB">HNB </option>
                        </select>
            </td>
        </tr>
       <br>
        <tr>
            <td>BANK STATUS: </td>
            <td>
            <select name="bank_s"> 
                        <option value="Mian Branch">Mian Branch </option>
                        <option value="Micom">Micom</option>
                        <option value="Super Branch">Super Branch </option>
                        
                        </select>
            </td>
        </tr>
       <br>
        
        <tr>
            <td>LOCATION: </td>
            <td><select name="location"> 
                        <option value="a">Rajagiriya</option>
                        <option value="b">Nugegoda</option>
                        <option value="c">Maharagama</option>
                        <option value="c">Rawathawatta</option>
                        <option value="c">Main Street</option>
                        <option value="c">Gold Center</option>
                        <option value="c">Kotahena</option>
                        <option value="c">Wattala</option>
                        <option value="c">Orion City</option>
                        <option value="c">Kandy</option>
                        <option value="c">KCC</option>
                        <option value="c">Kurunegala</option>
                        <option value="c">Chilaw</option>
                        <option value="c">Golle</option>
                        <option value="c">Bambalapitiya</option>
                        
                        </select>
            </td>
            
        </tr>
         <br>
         <br>
                   
        <tr>
            <td>VISITED BY: </td>
            <td><input type="text" name="visite">
            <br></td>
            
        </tr>
         <tr>
            <td>STATUS: </td>
            <td><input type="text" name="telphon">
            <br></td>
            
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="" name="pass1">
            <br></td>
            
        </tr>
         <tr>
            <td> Re enter your Password: </td>
            <td><input type="password" name="pass2">
            <br></td>
            
        </tr>
         <br>
         
    </table> 
<?php
// define variables and set to empty values
//$name = $email =  $com_name1 = "";
$b_name ="";
$location="";
$b_status="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $b_name = ($_POST["b_name"]);
   $b_status = ($_POST["bank_s"]);
   $location =($_POST["location"]);
   //$com_name1= test_input($_POST["com_name"]);
   //$telphon=test_input($_POST["tel"]);
   
}

//function test_input($data) {
 //  $data = trim($data);
 //  $data = stripslashes($data);
  // $data = htmlspecialchars($data);
  // return $data;
//}
?>
  
   
   <input type="submit" name="submit" value="Submit">
  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $b_name ;
echo "<br>";
echo $b_status ;
echo "<br>";
echo $location;
echo "<br>";
//echo $com_name1;
echo "<br>";
//echo "$telphon";


?>
</div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="well">
        Name: <input type="text" name="name">
   <br><br>
   E-mail: <input type="text" name="email">
   <br><br>
   Password: <input type="password" name="password">
   <br><br>
     <input type="submit" name="submit" value="Submit">   
    </div>
    </form>
  </div>
</body>
</html>
