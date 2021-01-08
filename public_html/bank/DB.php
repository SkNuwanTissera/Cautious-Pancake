<?php
$dbuser ="dsandcol_recode";
$dbpass ="aikenbdm123";
$dbdatabese ="dsandcol_recode";
$dbhost ="localhost";

$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbdatabese);
if($dbconn){
    
   // print 'DB connect sucsses';
    
}
 else {
    print 'ERROR';
}


?>
