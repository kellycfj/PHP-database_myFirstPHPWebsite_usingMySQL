<?php
//database page connection
   include('connection.php');
   session_start();
   
   //require login credentials to enter pages
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
   ?>