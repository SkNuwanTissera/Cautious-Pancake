    
          <?php
//include_once ("DB.php");
//include_once ("DB.php");
// define variables and set to empty values
//$name = $email =  $com_name1 = "";
//$b_name ="";
//$location="";
//$m_name="";
//$sirial="";
if(isset($_POST['save'])){ 
    include_once ("DB.php");
   $name = ($_POST["username"]);
   $nic = ($_POST["nic"]);
   $password =($_POST["password"]);
   
   //$tel = ($_POST["tel"]);
   
  // $serial =($_POST["serial"]);
   //$com_name1= test_input($_POST["com_name"]);
   //$telphon=test_input($_POST["tel"]);
   $sql = "INSERT INTO singin (username,NIC,password) VALUES ('" . $name . "', '" . $nic . "', '" . $password . "')";
          $res= mysqli_query($dbconn, $sql);


          echo 'saved';
}  else {
    echo 'can not save';
}

//function test_input($data) {
 //  $data = trim($data);
 //  $data = stripslashes($data);
  // $data = htmlspecialchars($data);
  // return $data;
//}
?>
