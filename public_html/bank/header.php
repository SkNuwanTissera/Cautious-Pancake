<?php
include './DB.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$header='<nav class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="197">   
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">AIKEN</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="edite.php">CUSTOMER</a></li>
        <li><a href="employ.php">EMPLOYEE</a></li>
        <li><a href="new_customer.php">CREATE CUSTOMER</a></li>
        <li><a href="recodes.php">RECORDS</a></li>
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
';

?>