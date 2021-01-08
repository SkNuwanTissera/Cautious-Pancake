<?php
$dbuser ="dsandcol_new1";
$dbpass ="Aiken123";
$dbdatabese ="dsandcol_new1";
$dbhost ="localhost";

$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbdatabese);
if($dbconn){
    
   // print 'DB connect sucsses';
    
}
 else {
    print 'ERROR';
}


?>

