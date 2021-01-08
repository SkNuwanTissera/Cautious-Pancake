    
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
   //$nic = ($_POST["nic"]);
   $password =($_POST["password"]);
   
   //$tel = ($_POST["tel"]);
   
  // $serial =($_POST["serial"]);
   //$com_name1= test_input($_POST["com_name"]);
   //$telphon=test_input($_POST["tel"]);
   $sql = "select count(*) from singin where(username='".$name."' and password='".$password."')";
   
        
      $quary=mysqli_query($dbconn,$sql);
      $result=  mysqli_fetch_array($quary);
      if($result[0]>0)
      {
      


          echo 'login successfull';
          header('location:test3.php');
}  else {
    echo 'can not login';
    header('location:index.php'); 
}

//function test_input($data) {
 //  $data = trim($data);
 //  $data = stripslashes($data);
  // $data = htmlspecialchars($data);
  // return $data;
}
?>


