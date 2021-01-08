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
<nav class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="197">   
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Online Store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="upload.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
       
      <ul class="nav navbar-nav navbar-right">
          <li><a href="Edite.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
        <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
    </div>
  </div>
</nav>
<script>
    $(document).ready(function(){
    var d = new Date;
    var hours = d.getHours(); // call methods on your instance d
    var mins = d.getMinutes();
    if (hours > 12) {
        var hour = (hours - 12);
        var ampm = "PM";
    }
    else {
        var hour = hours;
        var ampm = "AM";
    }
    var time = hour + ":" + mins + ampm; // string concatenate ampm
    $("h1").html(time);
});​ // removed extraneous });
</script>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php
                include_once ("DB.php");
                
              $sql1="SELECT * FROM customer";
             //$sql="SELECT * FROM customer WHERE name="";
$result=mysqli_query($dbconn,$sql1);
$result1=mysqli_query($dbconn,$sql1);
//$result2=mysqli_query($dbconn,$sql1);


               ?> 
        <style>
img {
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -1;
}
</style>
        <br><br><br>
    <div class="well">
        <h2>ON LINE UPDATE</h2>
        
       <form action="#" method="post">
<select name="Color[]" multiple> // Initializing Name With An Array
<option value="Red">Red</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Yellow">Yellow</option>
</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
if(isset($_POST['submit'])){
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
foreach ($_POST['Color'] as $select)
{
echo "You have selected :" .$select; // Displaying Selected Value
}
}
?>
        
        
    </div>
    </body>
    </html>


